<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\AuthUserRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function create()
    {
        return view('auth.login');
    }

    public function store(AuthUserRequest $request)
    {
        if (Auth::attempt($request->validated())) {
            request()->session()->regenerate();

            return redirect()->intended(route('home'))->with(['success' => 'Login Successful']);
        }

        return back()->with(['error' => 'Invalid Login Details']);
    }

    public function destroy(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('home');
    }
}
