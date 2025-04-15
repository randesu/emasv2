<?php

use Illuminate\Support\Facades\Route;
use Modules\Loginuser\Http\Controllers\LoginuserController;

Route::middleware(['auth:sanctum'])->prefix('v1')->group(function () {
    Route::apiResource('loginuser', LoginuserController::class)->names('loginuser');
});
