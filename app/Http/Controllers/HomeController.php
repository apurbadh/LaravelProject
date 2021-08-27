<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    function index(){
        if (Auth::check()){
            $posts = Post::all();
            return view("home", ['posts' => $posts]);
        }
        return redirect('/login');
        
    }
}
