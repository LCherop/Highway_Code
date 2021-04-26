<?php

namespace App\Http\Controllers;

use App\Models\personalRecordsfinal;
use Illuminate\Http\Request;

class PersonalRecordsController extends Controller
{
    public function personalR(){
        $precords = personalRecordsfinal::all();
        return view('precords')->withpersonalRecordsfinal($precords);
    }
}
