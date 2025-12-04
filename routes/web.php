<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/auth/google/redirect', function () {
    return Socialite::driver('google')->redirect();
})->name('google.redirect');

Route::get('/auth/line/redirect', function () {
    return Socialite::driver('line')->redirect();
})->name('line.redirect');

Route::get('/auth/github/redirect', function () {
    return Socialite::driver('github')->redirect();
})->name('github.redirect');

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

Route::get('/auth/line/callback', function () {
    $lineUser = Socialite::driver('line')->user();

    return redirect('https://www.youtube.com/?gl=TW&hl=zh-tw'); // 登入完要導去哪裡
})->name('line.callback');

Route::get('/auth/github/callback', function () {
    $githubUser = Socialite::driver('github')->user();

    return redirect('https://www.youtube.com/?gl=TW&hl=zh-tw'); // 登入完要導去哪裡
})->name('github.callback');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
