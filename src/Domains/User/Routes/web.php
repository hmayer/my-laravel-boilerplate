<?php

use Illuminate\Support\Facades\Route;
use User\Controllers\UserController;

Route::prefix('user')->group(function () {
    Route::get('/list', [UserController::class, 'index'])->name('user.list');
});
