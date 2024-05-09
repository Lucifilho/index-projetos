<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Projetos</title>

    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    @livewireStyles

</head>
<body>

<header>

    <div class="bloco-header">

        <a href="/">

            <img src="/assets/images/logo/">

        </a>

        <div class="menu">

            <nav class="navbar navbar-expand-lg navbar-light">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span><svg width="40" height="40" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" id="Menu"><g fill="#ffffff" class="color000000 svgShape"><g fill="#ffffff" class="color000000 svgShape"><rect width="18" height="2" x="3" y="11" rx=".95" ry=".95" fill="#ffffff" class="color000000 svgShape"></rect><rect width="18" height="2" x="3" y="16" rx=".95" ry=".95" fill="#ffffff" class="color000000 svgShape"></rect><rect width="18" height="2" x="3" y="6" rx=".95" ry=".95" fill="#ffffff" class="color000000 svgShape"></rect></g></g></svg></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">

                        <li class="nav-item active">
                            <a class="nav-link" href="/">Home</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="/projetos">Projetos</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="/novo-projeto">Novo Projeto</a>
                        </li>

                        @auth

                            <li class="nav-item">
                                <a class="nav-link" href="/user/profile">Minha Conta</a>
                            </li>

                            <form action="/logout" method="POST">
                                @csrf

                                <li class="nav-item">

                                    <a class="linkName"
                                       href="/logout"
                                       onclick="event.preventDefault();
                this.closest('form').submit();"
                                    >
                                        Sair

                                    </a>

                                </li>

                            </form>

                        @elseguest

                            <li class="nav-item">
                                <a class="nav-link" href="/login">Login</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="/register">Registrar</a>
                            </li>

                        @endguest
                    </ul>
                </div>
            </nav>

        </div>

    </div>

</header>

<main>

    @if(session('msg'))

        <p class="msg">{{session('msg')}}</p>

    @endif

    @yield('content')

</main>

<footer>

    <ul class="blocos">

        <li class="bloco">

            <div class="grupo">

                <h3>nome</h3>

                <div class="infos">

                    <p>Santa Rosa de Viterbo/SP</p>

                </div>

            </div>


        </li>

        <li class="bloco">

            <h3>Contato</h3>

            <div class="infos">

                <div class="info">
                    <a target="_blank" href="https://api.whatsapp.com/send?phone=" class="value"><img src="/assets/icons/telephone.svg" >Telefone: (16) 999999999</a>
                </div>

                <div class="info">
                    <a href="www..com.br" target="_blank" class="value"> <img src="/assets/icons/web.svg" > www..com.br</a>
                </div>

            </div>

        </li>

        <li class="bloco">

            <h3>Redes Sociais</h3>

            <ul class="redesSociais">

                {{--

                <li><a href="https://www.facebook.com/" target="_blank"><img class="socIcons" src="/assets/icons/facebook.svg"></a></li>

                <li><a href="https://www.youtube.com/" target="_blank"><img class="socIcons" src="/assets/icons/youtube.svg"></a></li>

                --}}

                <li><a href="https://www.instagram.com//" target="_blank"><img class="socIcons" src="/assets/icons/instagram.svg"></a></li>

                <li><a href="https://br.linkedin.com/" target="_blank"><img class="socIcons" src="/assets/icons/linkedin.svg"></a></li>

            </ul>

        </li>

    </ul>

    <div class="copy">
        &copy; {{date('Y')}} - Todos os direitos reservados.
    </div>

</footer>

@livewireScripts

</body>
</html>
