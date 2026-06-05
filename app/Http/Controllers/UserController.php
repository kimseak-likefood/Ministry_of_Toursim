<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;

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
        return redirect('/');
    }

    public function updateAvatar(Request $request){
            $request->validate([
                'avatar' => ['required', 'image', 'max:5120'],
            ]);

            if(auth()->user()->avatar){
                Storage::delete('public/' . auth()->user()->avatar);
            }

            $path = $request->file('avatar')->store('avatars', 'public');
            auth()->user()->update(['avatar' => $path]);
            return back();
    }

    public function updateProfile(Request $request){
        $incomingFields = $request->validate([
            'name' => ['sometimes','required', 'min:3', 'max:50', 'different:current_name',Rule::unique('users', 'name')],
            'email' => ['sometimes','required', 'different:current_email', Rule::unique('users', 'email')],
            'phone' => ['sometimes', 'nullable', 'different:current_phone'],
            'bio' => ['sometimes', 'nullable'],
            'location' => ['sometimes', 'nullable']
        ]);

        auth()->user()->update($incomingFields);
        return back()->with('success', 'Profile updated.');
    }

    public function deleteAccount(){
        $user = auth()->user();
        auth()->logout();
        $user->delete();
        return redirect('/');
    }
}