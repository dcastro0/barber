@extends('layouts.main')
@section('tela', 'AGENDAMENTOS')
@section('title', 'Agendamentos')
@section('content')
    @include('layouts.header')

    <main>
        <div class="container mt-4">
            <button type="button" class="btn btn-primary" data-toggle="collapse" data-target="#optionsDiv">
              Mostrar Opções
            </button>
        
            <div class="collapse mt-3" id="optionsDiv">
              <div class="card card-body">
                <label for="option1">Opção 1:</label>
                <input type="text" class="form-control" id="option1" name="option1">
        
                <label for="option2">Opção 2:</label>
                <input type="text" class="form-control" id="option2" name="option2">
        
                <!-- Adicione mais opções conforme necessário -->
              </div>
            </div>
          </div>
    </main>

@endsection