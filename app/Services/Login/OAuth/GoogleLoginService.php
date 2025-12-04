<?php

namespace App\Services\Login\OAuth;

use Laravel\Socialite\Facades\Socialite;

class GoogleLoginService implements OAuthLoginInterface
{
    public function driver(): string
    {
        return 'google';
    }

    public function redirect()
    {
        return Socialite::driver('google')->redirect();
    }

    public function callback()
    {
        
    }
}