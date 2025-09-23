<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/registration', function () {
    $students=[
        ["name"=>"Kavindu","age"=>22,"address"=>"Galle"],
        ["name"=>"Nimesh","age"=>21,"address"=>"Matara"],
        ["name"=>"Sajith","age"=>23,"address"=>"Colombo"],
        ["name"=>"Kasun","age"=>22,"address"=>"Kaluthara"],
        ["name"=>"Amal","age"=>24,"address"=>"Jaffna"]
    ];
    return view('Registration.registration',["title"=>"User Registration Page","students"=>$students]);
});

Route::get('/registration/{name}', function ($name) {

    return view('Registration.show',["student"=>["name"=>$name]]);
});

Route::get('/registration-form', function () {
    
    return view('Registration.registration-form',["title"=>"Student Registration"]);
});
