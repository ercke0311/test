<?php

namespace App\Services\Login\OAuth;

use Laravel\Socialite\Facades\Socialite;

class GoogleLoginService implements LoginInterface
{
    public function driver(): string
    {
        return 'google';
    }

    public function redirect()
    {
        return Socialite::driver('google')->redirect();
    }
}