<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    //


    public function list()
    {
        $students=[
            ["name"=>"Kavindu","age"=>22,"address"=>"Galle"],
            ["name"=>"Nimesh","age"=>21,"address"=>"Matara"],
            ["name"=>"Sajith","age"=>23,"address"=>"Colombo"],
            ["name"=>"Kasun","age"=>22,"address"=>"Kaluthara"],
            ["name"=>"Amal","age"=>24,"address"=>"Jaffna"]
        ];
        return view('Registration.registration',["title"=>"User Registration Page","students"=>$students]);
    }
    public function show($name)
    {
        return view('Registration.show',["student"=>["name"=>$name]]);
    }

    public function register()
    {
        return view('Registration.registration-form',["title"=>"Student Registration"]);
    }
}
