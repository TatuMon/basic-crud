<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class UserController extends Controller
{
    public function register(){
        $data = request()->validate([
            'email' => 'email|unique:users,email|email:rfc,dns|required',
            'password' => 'min:7|required|confirmed',
            'password_confirmation' => 'required'
        ]);
        $data['password'] = bcrypt($data['password']);

        $user = User::create($data);

        Auth::login($user);

        return back();
    }

    public function login(){
        $data = request()->validate([
            'email' => 'email|required',
            'password' => 'required'
        ]);

        if(Auth::attempt($data)){
            session()->regenerate();

            return back();
        }

        throw ValidationException::withMessages(['Wrong email or password']);
    }

    public function destroy(){
        Auth::logout();

        return back();
    }
}
