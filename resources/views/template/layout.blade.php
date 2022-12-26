<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Document</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <nav class="navbar navbar-expand-lg bg-dark">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    @auth
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('listagem-veiculo') }}">Veiculos</a>
                        </li>
                        
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('listagem-manutencao') }}">Manutenções</a>
                        </li>

                        <li class="nav-item">
                            <form action="{{ route('logout') }}" method="POST"> 
                                @csrf
                                <a class="nav-link" 
                                href="{{ route('logout') }}" 
                                onclick="event.preventDefault();
                                this.closest('form').submit();">
                                Sair
                                </a>
                            </form>
                        </li>

                    @endauth
                    @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">Entrar</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">Cadastrar</a>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>
    @yield('header')
</head>

<body>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    @yield('conteudo')
    
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/fontawesome.js') }}"></script>
    <script src="{{ asset('js/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('js/jquery.js') }}"></script>

    @yield('scripts')
</body>

</html>