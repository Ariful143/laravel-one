<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index(){
//        return 'Hello world from controller';
        return view('demo');
    }
    public function newOne(){
        return "Hello New One";
    }
    public function newTwo(){
        return "Hello New Two";
    }
}
