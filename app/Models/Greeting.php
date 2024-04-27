<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Greeting extends Model
{
    use HasFactory;

    public function createGreetingM(){
        $greeting = new Greeting();
        $greeting->body = 'Hola como estas';
        $greeting->save();
    }

    public function firstGreetingM(){

        //return Greeting::select('id', 'body')->first();
        $greeting = Greeting::select('id', 'body')->first();
        if($greeting){
            return "From Model " . "Id: " . $greeting->id . " Body: " . $greeting->body;
        }else{
            return 'No se ha encontrado ningu saludo :( ';
        }
    }
}
