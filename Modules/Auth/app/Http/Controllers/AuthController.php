<?php

namespace Modules\Auth\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Auth;
use Hash;
use Illuminate\Http\Request;
use Password;

class AuthController extends Controller
{


    // 🔹 Show Login Page
    public function loginForm()
    {
        return view('auth::login');
    }

    // 🔹 Handle Login
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->route('backend.dashboard');
        }

        return back()->with('error', 'Invalid email or password');
    }

    public function registerForm()
    {
        return view('auth::register');
    }

    public function register(Request $request)
    {
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        Auth::login($user);

        return redirect()->route('auth::login');
    }

    public function forgotForm()
    {
        return view('auth::forgot-password');
    }


    // 🔹 Logout
    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }

}
