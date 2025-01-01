<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    public function __invoke()
    {
        $login = [
            "email" => "test@example.com",
            "password" => "pass     word"
        ];

//        return $login;

        if (auth()->attempt($login)) {
           session()->regenerate();
           return auth()->user();
        }
    }
}
