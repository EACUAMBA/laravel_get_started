<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{

    public function authform()
    {
        return view('auth.login');
    }

    public function authenticate(UserRequest $userRequest)
    {
        $credentials = $userRequest->only(['email', 'password']);

        if(Auth::attempt($credentials)){
        $userRequest->session()->regenerate();

        return redirect()->intended();

    }

        return back()->withErrors([
            'email'=>'Email não existe no nosso banco de dados'
        ]);

    }

    public function logout()
    {
Auth::logout();
return view('auth.login');
    }
}
