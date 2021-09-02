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

        $res = $file->store($file->getClientOriginalName());

        return view("showdata");
    }

}
