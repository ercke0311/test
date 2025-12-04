<?php

namespace App\Services\Login\OAuth;

class OauthLoginFactory
{
    public function __construct(
        private LineLoginService $lineLogin,
        private GithubLoginService $githubLogin,
        private GoogleLoginService $googleLogin,
    ) {}

    public function create(string $driver): OAuthLoginInterface
    {
        return match ($driver) {
            'line' => $this->lineLogin,
            'github' => $this->githubLogin,
            'google' => $this->googleLogin,
            default => throw new \RuntimeException('unknown third party login'),
        };
    }
}