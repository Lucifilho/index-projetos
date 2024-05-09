<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    public function home(){

        return view('pages.home');
    }

    public function projetos(){

        return view('projetos.projetos');
    }

    public function novoProjeto(){

        return view('projetos.novo-projeto');
    }

    public function listaProjetos(){

        return view('projetos.lista-projetos');
    }
}
