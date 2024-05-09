<?php

namespace App\Http\Controllers;

use App\Models\Projeto;
use Illuminate\Http\Request;

class ManipulationController extends Controller
{
    public function novoProjeto(Request $request){

        $projeto = new Projeto();

        $projeto -> nome = $request -> nome;
        $projeto -> slug = str_replace(" ", "-", $request -> nome);
        $projeto -> url = $request -> url;
        $projeto -> linguagem = $request -> linguagem;
        $projeto -> descricao = $request -> descricao;

        //dd($request -> all());

        /**
        $request->validate([

            'thumbnail' => [
                'sometimes',
                'image',
                'max:2048',
            ],

        ]); */

        if ($request -> hasFile('thumbnail') && $request->file('thumbnail')->isValid()){

            $requestImage = $request -> thumbnail;

            $extension = $requestImage -> extension();

            $imageName = md5($requestImage -> getClientOriginalName() . strtotime("now")) . "." . $extension;

            $request-> thumbnail -> move(public_path('/imagens/projeto/thumbnail/'), $imageName);

            $projeto -> thumbnail = $imageName;

        }

        $projeto -> save();

        return redirect('/lista-projetos') -> with('msg','Projeto cadastrado com sucesso!');

    }
}
