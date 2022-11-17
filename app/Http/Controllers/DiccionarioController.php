<?php

namespace App\Http\Controllers;

use App\Models\Diccionario;
use Illuminate\Http\Request;

class DiccionarioController extends Controller
{
    public function diccionario(){

        $diccionario = Diccionario::get();

        return view('diccionario', compact('diccionario'));
    }
}
