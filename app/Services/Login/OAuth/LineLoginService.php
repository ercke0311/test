<?php

namespace App\Services\Login\OAuth;

use Laravel\Socialite\Facades\Socialite;

class LineLoginService implements OAuthLoginInterface
{
    public function driver(): string
    {
        return 'line';
    }

    public function redirect()
    {
        return Socialite::driver('line')->redirect();
    }

    public function callback()
    {
        
    }
}