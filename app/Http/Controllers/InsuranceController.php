<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Insurance;

class InsuranceController extends Controller
{
    //
    public function show($url){
        $insurance = Insurance::where('url','=',$url)->get();

        return view('our-insurance',compact('insurance'));

    }
}
