<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class WebsiteChatIdentityController
{
    public function __invoke(Request $request): JsonResponse
    {
        abort_unless(config('services.website_chat.widget'), 404);

        $identity = null;
        $user = $request->user();
        $secret = config('services.website_chat.secret');
        if ($user) {
            abort_unless($secret, 503);
            $claims = [
                'sub' => (string) $user->getKey(),
                'name' => mb_substr($user->name, 0, 120),
                'exp' => now()->addMinutes(5)->timestamp,
            ];
            if ($user->hasVerifiedEmail()) {
                $claims['email'] = $user->email;
            }

            $payload = rtrim(strtr(base64_encode(json_encode($claims, JSON_THROW_ON_ERROR)), '+/', '-_'), '=');
            $identity = $payload.'.'.hash_hmac('sha256', $payload, $secret);
        }

        return response()->json(['identity' => $identity, 'account' => $user ? (string) $user->getKey() : null])->header('Cache-Control', 'no-store, private');
    }
}
