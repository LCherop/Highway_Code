<?php

namespace App\Http\Controllers;
use App\Models\offences;
use Illuminate\Http\Request;
use App\Models\User;
class alloffensesController extends Controller
{
    public function alloffenses(){
        $offenses = offences::all();
        return view('alloffenses')->withoffences($offenses);

    }
    
   
}
