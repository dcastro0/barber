@extends('layouts.main')
@section('tela', 'AGENDAMENTOS')
@section('title', 'Agendamentos')
@section('page2', 'text-info')
@section('content')
    @include('layouts.header')

    <main>
        <div class="container text-center fundo col-md-6 offset-md-3">
            <div class="text-white">
                <h1>Agende seu Horário</h1>    
            </div>
            
            <form action="/agendar" method="post" class="">
                @csrf
                <div class="row margin">
                    <div class="col">
                        <label for="date" class="text-white label">Selecione um barbeiro</label>
                        <select class="form-select" aria-label=""  id="barber" name="barber" required   >
                            <option selected disabled value="">-</option>
                            <option value="Barbeiro 1">Barbeiro 1</option>
                            <option value="Barbeiro 2">Barbeiro 2 </option>
                        </select>
                    </div>
                </div>
                <div class="row margin">
                    <div class="col">
                        <label for="time" class="text-white label">Selecione um horário</label>
                        <select class="form-select" aria-label="" id="time" name="time" required>
                            <option selected disabled value="">-</option>
                            <option value="09:00:00">9:00</option>
                            <option value="10:00:00">10:00</option>
                            <option value="11:00:00">11:00</option>
                            <option value="12:00:00">12:00</option>
                            <option value="13:00:00">13:00</option>
                            <option value="14:00:00">14:00</option>
                            <option value="15:00:00">15:00</option>
                            <option value="16:00:00">16:00</option>
                            <option value="17:00:00">17:00</option>
                            <option value="18:00:00">18:00</option>
                        </select>
                    </div>
                </div>
                <div class="row margin">
                    <div class="col">
                        <label for="date" class="text-white label">Selecione a Data</label>
                        <input type="date" name="date" id="date" class="form-control" required min="{{ now()->format('Y-m-d') }}">
                    </div>
                </div>
                <div>
                    <button type="submit" class="btn btn-dark buttonMargin btn-lg">Agendar</button>
                </div>
            </form>
            @if(session('mensagem'))
                <script>
                    alert("{{ session('mensagem') }}");
                </script>
            @endif
            @stack('validarForm')
            @stack('scripts')
        </div>
    </main>
@endsection
