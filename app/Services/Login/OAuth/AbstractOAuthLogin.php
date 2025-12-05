<?php

namespace App\Services\Login\OAuth;

use Socialite;

abstract class AbstractOAuthLogin implements OAuthLoginInterface
{
    abstract public function driver(): string;

    protected function socialite()
    {
        return Socialite::driver($this->driver())->stateless();
    }
    
    protected function fetchUser()
    {
        return $this->socialite()->user();
    }

    public function redirect()
    {
        return $this->socialite()->redirect();
    }

    abstract public function callback();
}