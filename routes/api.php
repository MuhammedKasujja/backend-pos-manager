<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AccountContoller;

Route::prefix('v1/accounts')->group(function () {
    Route::get('/', [AccountContoller::class, 'index']);

    Route::post('/', [AccountContoller::class, 'register']);
});
