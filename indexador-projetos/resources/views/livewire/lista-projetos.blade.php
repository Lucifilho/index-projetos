<div>

    <div class="projetos">

        <div class="cabecalho">

            <h1>Lista de Projetos</h1>

            <div class="divisoria"></div>

            <span>Todos nossos projetos</span>

        </div>

        <div class="bloco-projetos">

            <div class="pesquisa">

                <input wire:model.live="search" type="search" placeholder="Digite aqui">

            </div>

            <ul class="lista-projetos">

                @foreach($projetos as $projeto)

                    <li class="projeto">

                        <a href="projeto/{{$projeto -> slug}}/{{$projeto -> id}}">

                            <div class="thumbnail" style="background-image: url( /imagens/projeto/thumbnail/{{$projeto -> thumbnail}})"></div>

                            <h3>{{$projeto -> nome}}</h3>

                        </a>

                    </li>

                @endforeach

            </ul>

            <div class="paginacao">

                <div class="resultado">

                    @if(count($projetos) == 1 )

                        <span>{{count($projetos)}} produto econtrodo</span>

                    @elseif(count($projetos) > 1)

                        <span>{{count($projetos)}} produtos econtrados</span>

                    @else

                        <span>Nenhum produto econtrado</span>

                    @endif


                </div>

                {{$projetos -> links()}}

            </div>

        </div>

    </div>

</div>
