@extends('layouts.main')
@php
    $statusTexts = [
        1 => 'Pendente',
        2 => 'Confirmado',
        3 => 'Cancelado',
    ];
    $statusColor = [
        1 => 'text-warning',
        2 => 'text-success',
        3 => 'text-danger',
    ];
@endphp
@section('tela', 'GERENCIADOR DE AGENDAMENTOS')
@section('title', 'Gerenciador de Agendamentos')
@section('page4', 'text-info')


@section('content')
    @include('layouts.header')

    <table class="table container fw-bold">
        <thead class="table-dark">
            <th>Barbeiro</th>
            <th>Cliente</th>
            <th>Horário</th>
            <th>Data</th>
            <th>Status</th>
            <th></th>
        </thead>
        <tbody class="table-light">
            @foreach ($schedulings as $scheduling)
                
                <tr>
                    <td>{{ $scheduling->title }}{{ $scheduling->barber}}</td>
                    <td>{{ $scheduling->title }}{{ $scheduling['nome_de_usuario']}}</td>
                    <td>{{ $scheduling->title }}{{ substr($scheduling->time, 0, 5) }}</td>
                    <td>{{ $scheduling->title }}{{ date('d/m/Y', strtotime($scheduling->date)) }}</td>
                    <td class="{{ $scheduling->title }}{{ $statusColor[$scheduling->status]}}">{{ $scheduling->title }}{{ $statusTexts[$scheduling->status]}}</td>
                    <td>
                        <form action="/editar/{{ $scheduling->id }}" method="POST" class="btn-del">
                            @csrf
                            @method('PUT')
                            <div class="btn-group">
                                <button type="submit" name="status" id="status" value="2" class="btn btn-success delet-btn">Confirmar</button>
                                <button type="submit" name="status" value="3" class="btn btn-danger delet-btn">Cancelar </button>
                            </div>
                        </form>
                    </td>
            @endforeach
        </tbody>
    </table>
    @if(session('mensagem'))
        <script>
            alert("{{ session('mensagem') }}");
        </script>
    @endif

    

@endsection
