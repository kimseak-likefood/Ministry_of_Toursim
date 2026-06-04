<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function showRegister(){
        return view('register');
    }

    public function register(Request $request){
        
        $request->validate([
            'name'                  => 'required',
            'email'                 => 'required|email|unique:users',
            'password'              => 'required|min:6|confirmed', ], 
            [
            'email.unique'          => 'This email is already registered.',
            'password.min'          => 'Password must be at least 6 characters.',
            'name.required'         => 'Please enter your name.',
            'password.confirmed'    => 'Passwords do not match.', ]);

        $user = User::create([
            'name'     => $request->name,
            'email'    => $request->email,
            'password' => Hash::make($request->password) ]);

        Auth::login($user);
        return redirect('/');

    }

    public function showLogin(){
        return view('login');
    }

    public function login(Request $request){
        
        $request->validate([
            'email'    => 'required|email',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');

        if(Auth::attempt($credentials)){
            return redirect('/');
        }

        return back()->with('error', 'Invalid credentials');
    }

    public function logout(){
        Auth::logout();
        return redirect('/login');
    }
}