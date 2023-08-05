<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class SessionsController extends Controller
{
    public function store()
    {
        $attr = request()->validate([
            'email'=>['required','email', 'max:255'],
            'password'=>['required', 'max:255']
        ]);
        if(! auth()->attempt($attr)){
            throw ValidationException::withMessages(['email'=>'Try Again!']);   
        }
        session()->regenerate();
        return redirect('/dashboard')->with('success', 'Welcome Back!');
    }
    public function destroy()
    {
        auth()->logout();
        return redirect('/')->with('success', 'GoodBye!');
    }
}
