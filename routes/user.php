<?php

use App\Http\Controllers\User\AuthController;
use App\Http\Controllers\User\CartController;
use App\Http\Controllers\User\FavoritesController;
use App\Http\Controllers\User\ProductsController;
use App\Http\Controllers\User\ProfileController;
use App\Http\Middleware\AuthenticateUser;
use App\Models\Product;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $products = Product::query()
        ->orderBy('created_at', 'desc')
        ->limit(3)
        ->get();
    return view('user.home', [
        'products' => $products
    ]);
});

Route::get('/register', function () {
    return view('user.register');
});
Route::get('/login', function () {
    return view('user.login');
});

Route::post('/register', [AuthController::class, 'signUp']);
Route::post('/login', [AuthController::class, 'login']);
Route::get('/logout', [AuthController::class, 'logout']);

Route::middleware(AuthenticateUser::class)
    ->group(function () {
        Route::resource('products', ProductsController::class);
        Route::resource('cart', CartController::class);
        Route::resource('favorites', FavoritesController::class);
        Route::get('me', [ProfileController::class, 'me']);
        Route::post('/update-profile', [ProfileController::class, 'updateProfile']);
    });