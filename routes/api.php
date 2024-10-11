<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AccountContoller;

Route::get('v1/accounts', [AccountContoller::class,'index']);

Route::post('v1/accounts', [AccountContoller::class,'register']);