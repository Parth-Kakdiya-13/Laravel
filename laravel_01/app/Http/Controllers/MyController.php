<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
class MyController extends Controller
{
    public function index($id = null){
         $data = Employee::get();
        return view('users.index',compact('data'));
    }

    public function aboutUs($id = null){
        return view('users.about');
    }

    public function contactus($id = null){
        return view('users.contact');
    }
}


