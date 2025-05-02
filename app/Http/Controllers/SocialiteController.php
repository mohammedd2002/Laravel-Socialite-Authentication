<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class SocialiteController extends Controller
{
    public function login($provider)
    {
        return Socialite::driver($provider)->redirect();
    }

    public function redirect($provider)
    {
        $socialiteUser = Socialite::driver($provider)->user();
        $user = User::where('email', $socialiteUser->getEmail())->first();
        if (!$user) {
            $user = User::create([
                'provider' => $provider,
                'provider_id' => $socialiteUser->getId(),
                'name' => $socialiteUser->getName(),
                'email' => $socialiteUser->getEmail(),
            ]);
        }
        // return response()->json($user);
        Auth::login($user, true);
        return to_route('dashboard');
    }
}
