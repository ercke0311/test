<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/auth/google/redirect', function () {
    return Socialite::driver('google')->redirect();
})->name('google.redirect');

Route::get('/auth/google/callback', function () {
    $googleUser = Socialite::driver('google')->user();

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
})->name('google.callback');
