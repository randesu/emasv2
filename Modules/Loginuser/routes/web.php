<?php

use Illuminate\Support\Facades\Route;
use Modules\Loginuser\Http\Controllers\LoginuserController;

Route::middleware(['auth', 'verified'])->group(function () {
    Route::resource('loginuser', LoginuserController::class)->names('loginuser');
});
