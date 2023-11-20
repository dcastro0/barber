@extends('layouts.main')
@section('tela', 'HOME')
@section('title', 'Barbearia Expert')
@section('page1', 'text-info')
@section('content')
    @include('layouts.header')
    <main>
        <div class="container text-center fundo">   
            <h2 class="display-2 text-white">  Elevando o estilo masculino</h2>
            <p class="display-6 text-white" >Bem-vindo à Barbearia Expert, o seu refúgio para estilo e cuidado masculino. Nossos especialistas estão prontos para elevar o seu visual, proporcionando cortes de barba e cabelo impecáveis. Venha nos visitar e experimente a diferença da Barbearia Expert hoje.</p>
        </div>
        
    
        @guest
            <div class="text-center">
                <a href="/register"><button class="btn btn-dark btn-lg buttonMargin">Começar</button></a>
            </div>
        @endguest
        @auth
            <div class="text-center">
                <a href="/agendamento"><button class="btn btn-dark btn-lg buttonMargin">Agendar Horário</button></a>
            </div>
        @endauth
    </main>
    


@endsection


