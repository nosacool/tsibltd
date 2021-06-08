<?php

use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\InsuranceController;
use App\Http\Controllers\QuoteController;
use Illuminate\Support\Facades\Route;
use App\Models\User;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/about-us', function () {
    return view('about');
});

Route::get('/why-choose-us', function () {
    return view('why-choose-us');
});
Route::get('/contact-us', function () {
    return view('contact');
});
Route::get('/our-insurance/{url}', [InsuranceController::class, 'show']);

Route::get('/our-insurance', function(){
    return view('our-insurance');
});


Route::post('/contact-us', [ContactUsController::class , 'save_email']);
Route::post('/submit-quote', [QuoteController::class, 'save']);
Route::get('/page_confirm_email/{email}/{code}', function ($email,$code) {
    $user = User::where('email',$email)->where('validation_code',$code)->first();
    if(isset($user->id)){
        $user->active = 1;
        $user->validation_code = 0;
        $user->save();
        $message_1 = "Awesome!";
        $message_2 = "Your Account has been activated. Please Open your app and login.";
        $icon = "fa-check";
        $color = "green";
    }
    else{
        $message_1 = "Error!";
        $message_2 = "This Account does not EXIST!.";
        $icon = "fa-times";
        $color = "red";
    }
    return view('page_confirm_email',array("message_1"=>$message_1,"message_2"=>$message_2,'icon'=>$icon,'color'=>$color));
});
