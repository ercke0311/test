<?php

namespace App\Services\Login\OAuth;

use Laravel\Socialite\Facades\Socialite;

class GithubLoginService implements OAuthLoginInterface
{
    public function driver(): string
    {
        return 'github';
    }

    public function redirect()
    {
        return Socialite::driver('github')->redirect();
    }

    public function callback()
    {
        
    }
}