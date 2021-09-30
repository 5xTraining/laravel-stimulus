<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;

Route::get('/', function () {
    return view('home');
});

Route::get('/users/register', function () {
    return view('users/register');
});

Route::resource('products', ProductsController::class);
