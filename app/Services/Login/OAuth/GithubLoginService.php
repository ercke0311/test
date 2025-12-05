<?php

namespace App\Services\Login\OAuth;

use Socialite;

class GithubLoginService extends AbstractOAuthLogin implements OAuthLoginInterface
{
    public function driver(): string
    {
        return 'github';
    }

    public function callback()
    {
        $googleUser = $this->fetchUser();

        // 這裡可以依照你的 users table 寫
        // $user = User::firstOrCreate(
        //     ['google_id' => $googleUser->getId()],
        //     [
        //         'name'  => $googleUser->getName(),
        //         'email' => $googleUser->getEmail(),
        //     ]
        // );

        // Auth::login($user);

        return redirect('https://github.com'); // 登入完要導去哪裡
    }
}