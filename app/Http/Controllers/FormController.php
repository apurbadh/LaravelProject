<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{

    function index(Request $req){
        return view("form");
    }

    function store(){
        //
    }

}
