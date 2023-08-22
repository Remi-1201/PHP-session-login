<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class SessionsController extends Controller
{
    public function create()
    {
        return view('sessions.create');
    }
        
    public function store(Request $request)
    {
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->route('users.show', Auth::user());
        } else {
            return back()
                ->withErrors(['message' => 'The email or password is incorrect, please try again'])
                ->withInput();
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('sessions.create')->with('success','ログアウトしました');
    }
}