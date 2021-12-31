<?php

namespace App\Http\Controllers;

use Laravel\Socialite\Facades\Socialite;
use Exception;

class AuthController extends Controller
{
    public function redirect($provider)
    {
        if (in_array($provider, array_keys(config('services')))) {
            try {
                $socialite = Socialite::driver($provider)->stateless()->redirect();
            } catch (Exception $e) {
                return abort(505);
            }
            return $socialite;
        }
        return abort(404);
    }
    public function callback($provider)
    {
        if (in_array($provider, array_keys(config('services')))) {
            $user =  Socialite::driver($provider)->stateless()->user();
            return dd($user);
        }
        return abort(404);
    }
}
