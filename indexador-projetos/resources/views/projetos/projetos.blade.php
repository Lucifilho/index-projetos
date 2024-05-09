@extends('layouts.main')
@section('content')

    <div class="projetos-page">

        <div class="cabecalho">

            <h1>Todos os Projetos</h1>

            <span>Busque pelos projetos, e aproveite um pouco da nossa criatividade!</span>

        </div>

        <ul class="lista-projetos">

            @foreach($projetos as $projeto)

                <li class="projeto">

                    <a href="/{{$projeto -> slug}}/{{$projeto -> id}}">

                        <h2>{{$projeto -> nome}}</h2>

                    </a>

                </li>

            @endforeach

        </ul>

    </div>

@endsection
