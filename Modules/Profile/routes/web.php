<?php

use Illuminate\Support\Facades\Route;
use Modules\Profile\Http\Controllers\ProfileController;

Route::middleware(['auth', 'verified'])->group(function () {
    Route::resource('profile', ProfileController::class)->names('profile');
});
