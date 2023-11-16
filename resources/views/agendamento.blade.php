@extends('layouts.main')
@section('tela', 'AGENDAMENTOS')
@section('title', 'Agendamentos')
@section('page2', 'text-info')
@section('content')
    @include('layouts.header')

    <main>
        <div class="container text-center">
            <div class="text-white">
                <h1>Agende seu Horário</h1>    
            </div>
            
            <form action="/agendamento" method="post" class="">
                @csrf
                <div class="row margin">
                    <div class="col">
                        <select class="form-select" aria-label=""  id="barber" name="barber">
                            <option selected id="barber">Selecione um barbeiro</option>
                            <option value="Barbeiro 1">Barbeiro 1</option>
                            <option value="Barbeiro 2">Barbeiro 2 </option>
                        </select>
                    </div>
                </div>
                <div class="row margin">
                    <div class="col">
                        <select class="form-select" aria-label="" id="time" name="time">
                            <option selected >selecione um horario</option>
                            <option value="9:00">9:00</option>
                            <option value="10:00">10:00</option>
                            <option value="11:00">11:00</option>
                            <option value="12:00">12:00</option>
                            <option value="13:00">13:00</option>
                            <option value="14:00">14:00</option>
                            <option value="15:00">15:00</option>
                            <option value="16:00">16:00</option>
                            <option value="17:00">17:00</option>
                            <option value="18:00">18:00</option>
                        </select>
                    </div>
                </div>
                <div class="row margin">
                    <div class="col">
                        <select class="form-select " aria-label="" id="date" name="date">
                            <option selected>Selecione o dia</option>
                            <option value="1">Segunda-feira</option>
                            <option value="2">Terça-feira</option>
                            <option value="2">Quarta-feira</option>
                            <option value="2">Quinta-feira</option>
                            <option value="2">Sexta-feira</option>
                            <option value="2">Sabado</option>
                        </select>
                    </div>
                </div>
                <div>
                    <a href="/agendamento   "><button type="button" class="btn btn-dark">Agendar</button></a>
                </div>
            </form>
        </div>
        
    </main>

@endsection