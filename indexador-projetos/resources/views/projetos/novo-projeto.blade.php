@extends('layouts.main')
@section('content')

    <div class="novo-projeto-page">

        <form class="formulario" action="/cadastrar-projeto" method="post" enctype="multipart/form-data">
            @csrf

            <h1>Novo Projeto</h1>

            <div class="grupo">

                <label for="nome">Nome do projeto</label>
                <input name="nome" type="text" >

            </div>

            <div class="grupo">

                <label for="url">URL do projeto</label>
                <input name="url" type="text" >

            </div>

            <div class="grupo">

                <label for="thumbnail">Thumbnail</label>
                <input name="thumbnail" type="file" >

            </div>

            <div class="grupo">

                <label for="linguagem">Linguagem</label>
                <select name="linguagem">

                    <option value="" >Selecione uma opção</option>
                    <option value="Laravel" >Laravel</option>
                    <option value="PHP" >PHP</option>
                    <option value="React Js" >React Js</option>
                    <option value="Python" >Python</option>
                    <option value="Wordpress" >Wordpress</option>

                </select>

            </div>

            <div class="grupo">

                <label>Descrição</label>
                <textarea name="descricao"></textarea>

            </div>

            <button type="submit" class="btn-simples">Cadastrar</button>

        </form>

    </div>

@endsection
