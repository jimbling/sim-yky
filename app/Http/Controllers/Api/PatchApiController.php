<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SchoolRegistrationToken;
use App\Models\Patch;
use App\Models\PatchDistribution;

class PatchApiController extends Controller
{
    public function check(Request $request)
    {
        $request->validate([
            'token' => 'required|string',
        ]);

        $school = SchoolRegistrationToken::where('token', $request->token)
            ->where('status', 'used')
            ->first();

        if (!$school) {
            return response()->json([
                'update_available' => false,
                'message' => 'Token tidak valid atau belum digunakan.'
            ], 403);
        }

        $latestPatch = Patch::where('version', '>', $request->current_version)
            ->where(function ($query) use ($school) {
                $query->where('is_public', true) // Untuk patch publik
                    ->orWhereHas('distributions', function ($subQuery) use ($school) {
                        $subQuery->where('school_registration_token_id', $school->id);
                    }); // Untuk patch yang didistribusikan khusus
            })
            ->orderByDesc('created_at')
            ->first();



        if (!$latestPatch) {
            return response()->json([
                'update_available' => false,
                'message' => 'Tidak ada pembaruan saat ini.'
            ]);
        }

        // Simpan distribusi baru
        PatchDistribution::create([
            'patch_id' => $latestPatch->id,
            'school_registration_token_id' => $school->id,
            'status' => 'pending',
        ]);

        return response()->json([
            'update_available' => true,
            'patch' => [
                'name' => $latestPatch->name,
                'version' => $latestPatch->version,
                'description' => $latestPatch->description,
                'file_url' => url('storage/' . $latestPatch->file_path),
            ]
        ]);
    }
}
