<?php

use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\InsuranceController;
use App\Http\Controllers\QuoteController;
use Illuminate\Support\Facades\Route;


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
