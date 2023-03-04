<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ParcialController extends Controller
{
    public function pagina1(){
        return view('pagina1');

    }

    public function pagina2(){
        return view('pagina2');

    }

    public function retorno(){
        return view('layout');

    }

}
