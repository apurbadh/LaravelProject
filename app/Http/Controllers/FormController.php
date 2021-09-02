<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{

    function index(){
        return view("form");
    }

    function store(Request $req){
        $fullname = $req->input("fullname");
        $username = $req->input("username");
        $email = $req->input("email");
        $passw = $req->input("password");
        $file = $req->file("profile");
        $path = $file->store("public");
        $path = str_replace("public", "/storage", $path);
        return view("showdata", ["fullname" => $fullname, "username" => $username, "email" => $email, "password" => $passw, "result"=>$path]);
    }

}
