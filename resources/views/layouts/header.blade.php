<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>
        <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/style.css')}}">
    
    </head>
    <body>
        <header>
            <nav class="navbar navbar-expand-lg navbar-ligth bg-light">
                <div class="container">
                    <a href="/"><img src="/img/logo.png" width="100vh;"></a>
                    <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarText">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarText">
                        <ul class="navbar-nav ms-auto">
                            <li class="nav-item">
                                <a href="/" class="nav-link fw-bold  @yield('page1') ">Home</a>
                            </li>
                            @auth   
                                <li class="nav-item">
                                    <a href="/agendamento" class="nav-link fw-bold @yield('page2')">Agendamentos</a>
                                </li>
                            @endauth
                            @auth   
                                <li class="nav-item">
                                    <a href="/meusAgendamentos" class="nav-link fw-bold @yield('page3')">Meus Agendamentos</a>
                                </li>
                            @endauth
                            
                            @guest
                                <li class="nav-item">
                                    <a href="/login" class="nav-link fw-bold @yield('page5')">Login</a>
                                </li>
                            @endguest
                            @auth
                                <li class="nav-item">
                                    <a href="/conta" class="nav-link fw-bold">Conta</a>
                                </li>
                            @endauth
                            @auth
                                <li class="nav-item">
                                    <a href="{{ route('gerenciar') }}" class="nav-link fw-bold @yield('page4')">Barbeiro</a>
                                </li>
                            @endauth
                        </ul>
                    </div>
                </div>
            </nav>
            <div class="bg-dark py-5">
                <div class="container px-4 px-lg-5 my-1">
                    <div class="text-white text-center">
                        <h1 class="display-4 fw-bolder">@yield('tela')</h1>
                    </div>
                </div>
            </div>
        </header>
    </body>