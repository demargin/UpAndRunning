<?php

use App\Http\Controllers\GreetingController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;
use App\Models\Greeting;


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


 /**
  * This example uses a controller to display the message
  */

 //Route::get('/', [WelcomeController::class, 'index']);

/**
 * In this example we use Greeting.php and database
 */

 /* Route::get('create-greeting', function () {
  $greeting = new Greeting;
  $greeting->body = 'Hello, World!';
  $greeting->save();
});

Route::get('first-greeting', function () {
  return Greeting::first()->body;
}); */


/**
 * Now, as the previous example , we gonna use a controller for the same result
 */

 Route::get('create-greeting', [GreetingController::class, 'createGreeting']);
 Route::get('first-greeting', [GreetingController::class, 'firstGreeting']);

 Route::get('create-greetingM', [Greeting::class, 'createGreetingM']);
 Route::get('first-greetingM', [Greeting::class, 'firstGreetingM']);