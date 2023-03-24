<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerFormulario extends Controller
{
    public function suma(Request $request){
    $numero1=$request->input('numero1');
    $numero2=$request->input('numero2');
    $o=$request ->input('calc');
    $resultado=0;
    switch($o){
        case 1:
            $resultado=$numero1+$numero2;
            break;
        case 2:
            $resultado=$numero1-$numero2;
            break;
        case 3:
            $resultado=$numero1*$numero2;
            break;
        case 4:
            $resultado=$numero1/$numero2;
            break;
    }
   
    //return $request;
    return view('mostrar', compact('resultado'));
    //return (compact('suma'));
    }
}
