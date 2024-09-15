<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Redirect;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login() {
        
        return view('auth.login');
    }

    public function authenticate(Request $request) {
        $credentials = $request->only('email', 'password');

        if(Auth::attempt($credentials)) {
            // return redirect("www.youtube.com");
            return Redirect::to("https://www.youtube.com/watch?v=dQw4w9WgXcQ");
        } else {
            return redirect('login')->with('error_message', 'Wrong Email or Password');
        }
    }

    public function logout(){
        Session::flush();
        Auth::logout();

        return redirect('login');
    }

    public function register(Request $request){

        $request->validate([
            'name'      => 'required|unique:users',
            'password'  => 'required|min:6|confirmed',
            'email'     => 'required|unique:users|email',
            'telp'      => 'required|unique:users|numeric'
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password'=> Hash::make($request->password),
            'telp' => $request->telp
        ]);

        return redirect('login');
        
    }

    public function register_form(){
        return view('auth.register');
    }
}
