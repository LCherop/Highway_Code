<?php

namespace App\Http\Controllers;
use App\Models\committed_offenses_final;
//use App\Models\committed_offences_final;
use Illuminate\Http\Request;
use App\Models\User;

class committedController extends Controller
{
    public function driver_offenses(){
        $myoffenses = committed_offenses_final::all();
        return view('allrecords')->withcommitted_offenses_final($myoffenses);
    }
}
