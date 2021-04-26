<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class adminhomeController extends Controller
{
    public function home(){
        return view('adminhome');

    }
    public function dash(){
        return view('admindashboard');

    }
    
   
}
