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
    // public function welcome(Comment $comment)
    // {
    //     dd($comment);
    //     return view('dashboard', [
    //         'comments' => $comment
    //     ]);
    // }
    public function welcome(Comment $comment)
    {
        ddd($comment);
        return view('dashboard', [
            'comments' => $comment
        ]);
    }
}
