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

      public function showID(int $id){
        echo "Your ID is {$id}";
    }

    public function studentInfo(){
        return view('student');
    }
}
