<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ClientToken;
use App\Models\SchoolRegistrationToken;

class RegisterClientController extends Controller
{
    public function __invoke(Request $request)
    {
        // Ambil nilai token dari JSON body atau form
        $tokenValue = $request->input('token') ?? $request->json('token');
        $request->merge(['token' => $tokenValue]);

        $request->validate([
            'token' => 'required|string',
        ]);

        // Cari token apapun
        $token = SchoolRegistrationToken::where('token', $tokenValue)->first();

        if (!$token) {
            return response()->json([
                'status' => 'error',
                'message' => 'Token tidak ditemukan.',
            ], 404);
        }

        if ($token->status === 'used') {
            return response()->json([
                'status' => 'error',
                'message' => 'Token sudah digunakan.',
            ], 403);
        }

        if ($token->valid_until && $token->valid_until->isPast()) {
            return response()->json([
                'status' => 'error',
                'message' => 'Token sudah kedaluwarsa.',
            ], 410);
        }

        return response()->json([
            'status' => 'success',
            'school' => [
                'school_uuid' => $token->school_uuid,
                'name' => $token->name,
                'npsn' => $token->npsn,
                'email' => $token->email,
                'address' => $token->address,
                'license_key' => $token->token,
                'valid_until' => $token->valid_until,
            ]
        ]);
    }
}
