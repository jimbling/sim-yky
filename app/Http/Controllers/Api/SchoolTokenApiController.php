<?php

namespace App\Http\Controllers\Api;

use App\Models\SchoolRegistrationToken;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SchoolTokenApiController extends Controller
{
    public function confirmTokenUsed(Request $request)
    {
        $request->validate([
            'token' => 'required|string',
            'domain' => 'required|string',
            'activated_at' => 'required|date',
        ]);

        $token = SchoolRegistrationToken::where('token', $request->token)->first();

        if (!$token) {
            return response()->json(['message' => 'Token tidak ditemukan'], 404);
        }

        $token->update([
            'status' => 'used',
            'domain' => $request->domain,
            'activated_at' => $request->activated_at,
        ]);

        return response()->json(['status' => 'success', 'message' => 'Token telah dikonfirmasi sebagai digunakan.']);
    }
}
