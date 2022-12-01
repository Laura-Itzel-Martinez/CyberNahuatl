<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Cursos extends Controller{
    public function morfologica(){
        return view('cursos/morfologica');
    }
    public function honorifico(){
        return view('cursos/honorifico');
    }
    public function metaforica(){
        return view('cursos/metaforica');
    }
    public function  omnipredicativa(){
        return view('cursos/omnipredicativa');
    }
    public function absolutivos(){
        return view('cursos/absolutivos');
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
    public function marcasSujetos(){
        return view('cursos/marcasSujetos');
    }

   
    public function pluralesSimples(){
        return view('cursos/pluralesSimples');
    }



}
