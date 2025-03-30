<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Livewire\User\UserUpdate;

Route::controller(UserController::class)->prefix('users')->group(function () {
    Route::get('/', 'index')->name('users.index');

    Route::get('/store-view', 'storeView')->name('users.store.view'); 
    Route::post('/store','store')->name('users.store');

    Route::get('/updateView/{id}','updateView')->name('users.update.view');

    Route::get('/show','show')->name('users.show');
});

    Route::get('/users/updateView/{id}', UserUpdate::class)->name('users.update.view');
    Route::put('/users/updateUser', UserUpdate::class)->name('users.update');	

Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified',])->group(function () {
    Route::get('/dashboard', function () { return view('dashboard'); })->name('dashboard');
});
