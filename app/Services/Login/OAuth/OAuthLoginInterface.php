<?php

namespace App\Services\Login\OAuth;

interface OAuthLoginInterface
{
    public function driver(): string;
    public function redirect();
    public function callback();
}