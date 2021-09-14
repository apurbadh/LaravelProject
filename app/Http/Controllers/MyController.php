<?php

namespace App\Http\Controller;

use Illuminate\Http\Request;

class MyController extends Controller
{
    public function get(Request $req)
    {
        $name = $req->input("name");
        return view("home");
    }
}


?>
