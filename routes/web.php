<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;

Route::get('/', function () {
    return view('home');
});

Route::get('/users/register', function () {
    return view('users/register');
});
