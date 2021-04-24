@extends('layouts.app')

@section('content')
    <table class="table">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Email</th>
                <th>Telefone</th>
                <th>Endereço</th>
            </tr>
        </thead>
        <tbody>
        @foreach($funcionarios as $funcionario)
            <tr>
                <td>{{$funcionario->nome}}</td>
                <td>{{$funcionario->email}}</td>
                <td>{{$funcionario->telefone}}</td>
                <td>{{$funcionario->endereco}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection

