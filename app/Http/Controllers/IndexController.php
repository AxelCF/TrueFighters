<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){
        $posts = Post::with(['category', 'user'])->orderBy('created_at', 'DESC' )->limit(3)->get();

        $i = 1;

        return view('accueil', compact('posts' , 'i'));
    }
    
}
