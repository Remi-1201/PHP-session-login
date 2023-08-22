<?php

namespace App\Http\Controllers;
use App\Http\Requests\StoreUserRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function create()
    {
        return view('users.create');
    }

    public function store(StoreUserRequest $request)
    {
        $user = User::create($request->all());
        Auth::login($user); 
        return redirect()->route('users.show', $user);
    }

    public function show(User $user)
    {
        return view('users.show', compact('user'));
    }
}
