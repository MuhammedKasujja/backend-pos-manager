<?php

namespace App\Http\Controllers\Api;

use App\Models\Account;
use App\Http\Controllers\Controller;
use App\Http\Requests\Api\CreateAccountRequest;

class AccountContoller extends Controller
{
    public function index()
    {
        $accounts = Account::with('users')->get();
        return response()->json(['data' => $accounts, "message" => "Account created"]);
    }

    public function register(CreateAccountRequest $request)
    {
        return response()->json(['success' => true, "message" => "Account created"]);
    }
}
