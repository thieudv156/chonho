<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Comment;

class CommentController extends Controller
{
    //Admin
        public function getListComment() {
            $comments = Comment::all();
            return view('Admin.comment.listComment', compact('comments'));
        }

        

}
