<?php

namespace App\Http\Controllers;

use App\Models\User as ModelsUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class RegisterController extends Controller
{
    function index(Request $req){
        if (Auth::check()){
            return redirect('/');
        }
        return view("register");
    }

    function create(Request $req){
        $username = $req->input("username");
        $email = $req->input("email");
        $password = $req->input("password1");
        $confirm = $req->input("password2");

        if ($password != $confirm){
            session()->flash("message", "Password doesn't match !");
            return redirect("/register");
        }

        $found_user = ModelsUser::where("name", $username)->first();
        if ($found_user){
            session()->flash("message", "Username already taken !");
            return redirect('/register');
        }
        $found_user = ModelsUser::where("email", $email)->first();
        if ($found_user){
            session()->flash("message", "Email already used !");
            return redirect('/register');
        }
        $new_user = new ModelsUser();
        $new_user->name = $username;
        $new_user->email = $email;
        $new_user->password = $password;

        $new_user->save();

        Auth::login($new_user);

        return redirect('/');
    }
}
