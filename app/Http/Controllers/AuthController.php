<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    public function showLogin()
    {
        return view('login');
    }

    public function showSignin()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        try {
            $credentials = $request->validate([
                'username' => ['required', 'string'],
                'password' => ['required', 'string'],
            ]);
        } catch (ValidationException $e) {
            // Deterministic: always land on /login, never on wherever
            // the combined page happened to be mounted
            return redirect()
                ->route('login')
                ->withInput($request->only('username'))
                ->with('toast_type', 'error')
                ->with('toast_message', 'Please enter both your username and password.');
        }

        $remember = $request->boolean('remember');

        if (Auth::attempt($credentials, $remember)) {
            $request->session()->regenerate();
            $request->session()->flash('toast_type', 'success');
            $request->session()->flash('toast_message', 'Signed in successfully. Redirecting to your workspace...');

            return redirect()->intended('/');
        }

        return redirect()
            ->route('login')
            ->withInput($request->only('username'))
            ->with('toast_type', 'error')
            ->with('toast_message', 'Sign in failed. Please check your username and password.');
    }

    public function signin(Request $request)
    {
        try {
            $validated = $request->validate([
                'name' => ['required', 'string', 'max:255'],
                'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
                'username' => ['required', 'string', 'max:255', 'unique:users', 'alpha_dash'],
                'password' => ['required', 'string', 'min:8', 'confirmed'],
            ]);
        } catch (ValidationException $e) {
            $firstError = collect($e->errors())
                ->flatten()
                ->first() ?? 'Account creation failed. Please review your details and try again.';

            return redirect()->route('signin')
                ->withInput()
                ->with('toast_type', 'error')
                ->with('toast_message', $firstError);
        }

        $user = User::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'username' => $validated['username'],
            'password' => Hash::make($validated['password']),
        ]);

        Auth::login($user);
        $request->session()->regenerate();
        $request->session()->flash('toast_type', 'success');
        $request->session()->flash('toast_message', 'Account created successfully. Welcome to IPMS!');

        return redirect()->intended('/');
    }
}