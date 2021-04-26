<?php

namespace App\Http\Controllers;
use App\Models\offences;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
//use \Illuminate\Http\Response;

class offensesController extends Controller
{
    public function index(){
        return view('controllog');
    }

    public function push(Request $request){
        $offence = new offences;
        $offence->offenseId=request('offenseId');
        $offence->description=request('description');
        $offence->offenseFine=request('fine');
        $offence->save();
        return redirect('controllog')->with('success',"Offences added succesfully");
    }

}