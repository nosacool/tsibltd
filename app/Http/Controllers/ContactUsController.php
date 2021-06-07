<?php

namespace App\Http\Controllers;

use App\Models\ContactUs;
use Illuminate\Http\Request;


class ContactUsController extends Controller
{
    //
    function save_email(Request $request){
        $info = new ContactUs($request->input());
        $info->save();
        return redirect('/contact-us#FORM')->with('success','Message Sent Successfully');

    }
}
