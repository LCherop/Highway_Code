<?php

namespace App\Http\Controllers;
use App\Models\offences;
use Illuminate\Http\Request;
class alloffensesController extends Controller
{
    public function alloffenses(){
        $offenses = offences::all();
        return view('alloffenses')->withoffences($offenses);

    }
    
   
}
