<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\User;
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
        Auth::login(User::all()->where('email', '=', $credentials[0])->first());

        return redirect()->intended('pessoa');

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
