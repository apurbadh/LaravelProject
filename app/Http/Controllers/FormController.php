<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use Illuminate\Support\Facades\Hash;


class FormController extends Controller
{

    function index(){
        return view("form");
    }

    function store(Request $req){
        $req->validate([
            "fullname" => "required|max:255",
            "name" => "required|max:255|unique:students",
            "email" => 'email|required|unique:students',
            "password" => 'confirmed|required|min:8'
        ]);
        $fullname = $req->input("fullname");
        $username = $req->input("name");
        $email = $req->input("email");
        $passw = $req->input("password");
        $file = $req->file("profile");
        $path = $file->store("public");
        $path = str_replace("public", "/storage", $path);
        $student = new Student();
        $student->name = $username;
        $student->fullname = $fullname;
        $student->email = $email;
        $student->password = Hash::make($passw);
        $student->path = $path;
        $student->save();
        return redirect('/form')->with("message", "Sucessfully registered !");
    }

}
