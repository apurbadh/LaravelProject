<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use Illuminate\Support\Facades\Hash;


class FormController extends Controller
{

    public function index()
    {
        $users = Student::all();
        return view("user.index", ["users" => $users]); 
    }

    function create()
    {
        return view("user.create");
    }

    function store(Request $req)
    {
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

    public function edit(Request $req, Student $student)
    {
        return view("user.edit", compact("student"));
    }

    public function update(Request $req, Student $student)
    {
        $req->validate([
            "fullname" => "required|max:255",
            "name" => "required",
            "email" => "required|email"
        ]);
        $student->update($req->all());
        return redirect("/student")->with('message','Student updated successfully');;
    }

    public function destroy(Student $student)
    {
        $student->delete();
        return redirect('/student')->with("message", "Student deleted sucessfully");
    }
}
