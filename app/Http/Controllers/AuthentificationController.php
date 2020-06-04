<?php

namespace App\Http\Controllers;


use App\User;
use Dotenv\Exception\ValidationException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthentificationController extends Controller
{
    function auth(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);
        $user = User::where('email', $request->input('email'))->first();
        if (Auth::attempt($request->only(['email', 'password']))) {
            return Auth::user();
        }
        throw ValidationException::withMessage([
            'email' => ' Email ou  Mot de passe incorrect'
        ]);
    }

    function user(Request $request)
    {
        return Auth::user();
    }

}
