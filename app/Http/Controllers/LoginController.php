<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    function index(){
        if (Auth::check()){
            return redirect('/');
        }
        return view("login");
    }

    function create(Request $req){
        $username = $req->input("username");
        $password = $req->input("password");
        $found_user = User::where("name", $username)->first();
        if (!$found_user || $found_user->password != $password){
            session()->flash("message", "Incorrect Credentials !");
            return redirect("/login");
        }
        Auth::login($found_user);
        return redirect("/");
    }

    function logout(){
        Auth::logout();
        return redirect('/login');
    }
}
