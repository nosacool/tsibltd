<?php

namespace App\Http\Controllers;

use App\Models\Quote;
use Illuminate\Http\Request;

class QuoteController extends Controller
{
    //

    public function save(Request $request){
        $request->validate(
            [
                'name'=> ['required'],
                'email'=>['email','required'],
                'phone'=>['numeric','required']
]
            );

        $quote = New Quote($request->input());
        $quote->save();

        return back()->with('success','Thanks for your interest and you will be contacted via email/phone');
    }
}
