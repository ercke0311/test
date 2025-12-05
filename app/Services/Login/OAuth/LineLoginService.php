<?php

namespace App\Services\Login\OAuth;

use Socialite;

class LineLoginService extends AbstractOAuthLogin implements OAuthLoginInterface
{
    public function driver(): string
    {
        return 'line';
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

        return redirect('https://www.youtube.com/?gl=TW&hl=zh-tw'); // 登入完要導去哪裡
    }
}