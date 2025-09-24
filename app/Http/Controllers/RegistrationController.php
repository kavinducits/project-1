<?php

namespace App\Http\Controllers;

use App\Models\Student;
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
       $student=Student::findOrFail($name);
        return view('Registration.show',["student"=>$student]);
    }

    public function register()
    {
        return view('Registration.registration-form',["title"=>"Student Registration"]);
    }
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|max:255',
            'age' => 'required|integer',
            'address' => 'required|max:255',
        ]);

        // If the validation passes, you can proceed to save the data
        $student = new Student();
        $student->name = $request->input('name');
        $student->age = $request->input('age');
        $student->address = $request->input('address');
        $student->save();

        return redirect()->route('registration.list')->with('success', 'Student registered successfully!');
    }
}
