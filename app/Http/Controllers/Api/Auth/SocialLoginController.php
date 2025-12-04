<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Controller;
use App\Services\Login\OAuth\OAuthLoginFactory;
use Illuminate\Http\Request;

class SocialLoginController extends Controller
{
    private OAuthLoginFactory $loginFactory;

    public function __construct(OAuthLoginFactory $loginFactory)
    {
        $this->loginFactory = $loginFactory;
    }

    public function redirect(Request $request, string $driver)
    {
        return $this->loginFactory
            ->create($driver)
            ->redirect();
    }
}