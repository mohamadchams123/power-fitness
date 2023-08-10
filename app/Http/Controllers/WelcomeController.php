<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\User;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
        return view('login');
    }
    public function welcome(User $comments)
    {
        dd($comments);
        return view('dashboard', [
            'comments' => $comments
        ]);
    }
}
