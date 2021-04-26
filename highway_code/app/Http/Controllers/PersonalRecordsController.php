<?php

namespace App\Http\Controllers;

use App\Models\personalRecords;
use Illuminate\Http\Request;

class PersonalRecordsController extends Controller
{
    public function personalR(){
        $precords = personalRecords::all();
        return view('precords')->withpersonalRecords($precords);
    }
}
