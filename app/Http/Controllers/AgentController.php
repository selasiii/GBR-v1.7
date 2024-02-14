<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

class AgentController extends Controller
{
    public function loginForm()
    {
        return view('auth.agent-login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::guard('agent')->attempt($credentials)) {
            return redirect()->intended('/agent/dashboard');
        }

        return back()->withErrors(['email' => 'Invalid login credentials']);
    }

    public function dashboard()
    {
        return view('agent.dashboard');
    }

    public function logout(Request $request)
    {
        Auth::guard('agent')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
