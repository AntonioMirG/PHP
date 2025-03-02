<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class postController extends Controller
{
    public function create(){
        return view('post.create');
    }

    public function show($post){
        return view('post.show', compact('post'));
    }
}