<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Cursos extends Controller{

    public function marcasSujetos(){
        return view('cursos/marcasSujetos');
    }

    public function reverenciales(){
        return view('cursos/reverenciales');
    }

    public function diminutivos(){
        return view('cursos/diminutivos');
    }

    public function posesivos(){
        return view('cursos/posesivos');
    }

    public function absolutivos(){
        return view('cursos/absolutivos');
    }
    public function pluralesSimples(){
        return view('cursos/pluralesSimples');
    }



}
