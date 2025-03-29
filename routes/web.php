<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::controller(UserController::class)->prefix('users')->group(function () {
    Route::get('/', 'index')->name('users.index');
    Route::get('/store-view', 'storeView')->name('users.store.view'); 
    Route::post('/store','store')->name('users.store');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
