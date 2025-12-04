<?php

namespace App\Services\Login\OAuth;

use Laravel\Socialite\Facades\Socialite;

class LineLoginService implements LoginInterface
{
    public function driver(): string
    {
        return 'line';
    }

    public function redirect()
    {
        return Socialite::driver('line')->redirect();
    }
}