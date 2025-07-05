<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function showUsers(){
        echo "No users found kk";
    }

    public function mydata(){
        return view('mydata');
    }
}
