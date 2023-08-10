<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\User;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Comment $comment)
    {
        request()->validate([
            'body'=>'required'
        ]);
        $comment->create([
            'user_id'=>request()->user()->id,
            'body'=>request('body')
        ]);
        return redirect('/dashboard');
    }
}
