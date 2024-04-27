<?php

namespace App\Http\Controllers;

use App\Models\Greeting;
use Illuminate\Http\Request;

class GreetingController extends Controller
{
    public function createGreeting(){
        $greeting = new Greeting();
        $greeting->body = 'Hola como estas';
        $greeting->save();
    }

    public function firstGreeting(){

        //return Greeting::select('id', 'body')->first();
        $greeting = Greeting::select('id', 'body')->first();
        if($greeting){
            return "Id: " . $greeting->id . " Body: " . $greeting->body;
        }else{
            return 'No se ha encontrado ningu saludo :( ';
        }
    }
}
