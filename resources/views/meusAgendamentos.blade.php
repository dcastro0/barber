@extends('layouts.main')
@section('tela', 'AGENDAMENTO')
@section('title', 'Meus Agendamentos')
@section('page3', 'text-info')

@section('content')
    @include('layouts.header')

    <table class="table container">
        <thead class="table-dark">
            <th>Barbeiro</th>
            <th>Cliente</th>
            <th>Horário</th>
            <th>Data</th>
            <th>Status</th>
        </thead>
        <tbody class="table-ligth">
            @foreach ($schedulings as $scheduling)
                <tr>
                    <td>{{ $scheduling->title }}{{ $scheduling->barber}}</td>
                    <td>{{ $scheduling->title }}{{ $scheduling['nome_de_usuario']}}</td>
                    <td>{{ $scheduling->title }}{{ $scheduling->time}}</td>
                    <td>{{ $scheduling->title }}{{ $scheduling->date}}</td>
                    <td>Ativo</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    

@endsection