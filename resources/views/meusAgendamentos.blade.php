@extends('layouts.main')
@section('tela', 'MEUS AGENDAMENTOS')
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
            <th></th>
        </thead>
        <tbody class="table-ligth">
            @foreach ($schedulings as $scheduling)
                <tr>
                    <td>{{ $scheduling->title }}{{ $scheduling->barber}}</td>
                    <td>{{ $scheduling->title }}{{ $scheduling['nome_de_usuario']}}</td>
                    <td>{{ $scheduling->title }}{{ $scheduling->time}}</td>
                    <td>{{ $scheduling->title }}{{ $scheduling->date}}</td>
                    <td>Ativo</td>
                    <td>
                        <form action="/deletar/{{ $scheduling->id }}" method="POST" class="btn-del">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger delete-btn btn-del"><i name="trash-outline"></i>Deletar</button>
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