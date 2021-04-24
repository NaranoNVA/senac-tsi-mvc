@extends('layouts.app')

@section('content')
    <table class="table">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Email</th>
                <th>Endereço</th>
                <th>Nascimento</th>
            </tr>
        </thead>
        <tbody>
        @foreach($clientes as $cliente)
            <tr>
                <td>{{$cliente->nome}}</td>
                <td>{{$cliente->email}}</td>
                <td>{{$cliente->endereco}}</td>
                <td>{{$cliente->nascimento}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection

