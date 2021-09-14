<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Models\Student;

class FormController extends Controller
{

    function index(){
        return view("form");
    }

    function store(Request $req){
        $req->validate([
            "fullname" => "required|max:255",
            "username" => "required|max:255",
            "email" => 'email address|required',
            "password" => 'confirmed|required|min:8'
        ]);
        $fullname = $req->input("fullname");
        $username = $req->input("username");
        $email = $req->input("email");
        $passw = $req->input("password");
        $file = $req->file("profile");
        $path = $file->store("public");
        $path = str_replace("public", "/storage", $path);
        $student = new Student();
        $student->username = $username;
        $student->fullname = $fullname;
        $student->email = $email;
        $student->password = Hash::make($passw);
        $student->save();
        return redirect('/form');
    }

}
