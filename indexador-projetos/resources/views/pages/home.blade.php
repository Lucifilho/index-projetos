@extends('layouts.main')
@section('content')

    <div class="home-page">

        <div class="cabecalho">

            <h1>Explorador de Projetos</h1>

            <span>Todos projetos, estarão disponíveis para teste!</span>

        </div>

        <ul class="lista-opcoes">

            <li>

                <a class="opcao" href="/projetos" style="background-image: url(/imagens/arquivos/projetos-opcao.jpg)">

                    <h1>Projetos</h1>

                </a>

            </li>

            <li>

                <a class="opcao" href="/" style="background-image: url(/imagens/arquivos/budget-opcao.jpg)">

                    <h1>Projetos</h1>

                </a>

            </li>



        </ul>

    </div>

@endsection
