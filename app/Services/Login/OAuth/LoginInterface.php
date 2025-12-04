<?php

namespace App\Services\Login\OAuth;

interface LoginInterface
{
    public function driver(): string;
    public function redirect();
}