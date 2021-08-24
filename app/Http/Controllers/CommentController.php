<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommentController extends Controller
{
    //index
    public function index(){
        return view('chatSystem.comments');
    }
}
