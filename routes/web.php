<?php

use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;

//By deafutl Route
/* Route::get('/', function () {
    return view('welcome');
});
 */

 /**
  * Here an example when we use 
  */
/* 
 Route::get('/', function(){
    return 'Hola como estas , todo bien ?';
 }); */

 Route::get('/', [WelcomeController::class, 'index']);