<?php

namespace App\Http\Controllers;
use App\Models\committed_offenses;
use Illuminate\Http\Request;

class recordController extends Controller
{
    public function records(){
        $committed = committed_offenses::all();
        return view('records', compact('committed'));

    }
    public function driver_records(){
        
    }
}
