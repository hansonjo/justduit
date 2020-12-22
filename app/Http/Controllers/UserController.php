<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Cookie;
use App\User;

class UserController extends Controller
{

    public function register(Request $request){
        $this->_regisValid($request);
        $user = User::create([
            'username' => $request->username,
            'password' => Hash::make($request->password),
            'email' => $request->email,
            'role' => 'member',
        ]);
        return redirect('login');
    }

    public function login(Request $request){
        if(Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            if($request->rememberMe) return redirect('/')->withCookie(Cookie::make('email', $request->email,120));
            return redirect('/');
        }
        return redirect('login')->with('failed','Wrong Email or Password');
    }

    public function logout(Request $request){
        $request->session()->flush();
        return redirect('/');
    }

    private function _regisValid(Request $request){
        $validation = $request->validate(
            [
                'username'  => 'required',
                'email'  => 'required|unique:users',
                'password'  => 'required|min:3',
                'confirm'  => 'required|required_with:password|same:password',
            ],
        );
    }

}
