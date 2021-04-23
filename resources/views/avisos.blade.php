@extends('layouts.externo')
@section('title', 'Quadro de Avisos da Empresa')
@section('sidebar')
    @parent
    <p>^ ^ Barra superior adicionada do layout pai/m&atilde;e ^ ^ </p>
@endsection
@section('content')
<div>
     <p>Olá, {{$nome}}! Veja abaixo aos avisos de hoje! </p>

     @if($mostrar)

     	@foreach($avisos as $aviso)
     		<p>Aviso #{{$aviso['id']}}: {{$aviso['texto']}}</p>
     	@endforeach

     @else
     	O aviso não será exibido!
     @endif
</div>
@endsection
