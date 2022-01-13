@extends('layouts.app',['title'=>'Nuestros clientes'])
@section('contenido')

@include('info.frase-clientes')
<div class="container">
    @include('info.nuestros-clientes')
</div>

<div class="container">
    <hr class="my-5" />
    @include('info.servicios')
</div>

@endsection
