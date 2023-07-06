<?php

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    Auth::loginUsingId(3);

    $users = User::all();

    return view('welcome', [
        'users' => $users,
    ]);
});

Route::get('/user/create', function () {
    return view('user_create');
})->middleware('can:create_user');

Route::post('/user/store', function () {
    var_dump('store user');
})->name('user.store')->middleware('can:store_user');


Route::get('/login', function () {
    var_dump('login view');
})->middleware('can:login_page');
