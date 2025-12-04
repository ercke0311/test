<?php

namespace App\Services\Login\Login;


class LoginFactory
{
    public static function create(string $driver): LoginInterface
    {
        return match ($driver) {
            'line' => app(LineLoginService::class),
            'facebook' => app(FbLoginService::class),
            'google' => app(GoogleLoginService::class),
            default => throw new \RuntimeException('unknown third party login')
        };
    }
}