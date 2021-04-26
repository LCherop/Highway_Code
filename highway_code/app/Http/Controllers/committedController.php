<?php

namespace App\Http\Controllers;
use App\Models\committed_offenses_final;
use Illuminate\Http\Request;
use App\Models\User;

class committedController extends Controller
{
    public function driver_offenses(){
        $myoffenses = committed_offenses_final::all();
        return view('allrecords')->withcommitted_offences_final($myoffenses);
    }
}
