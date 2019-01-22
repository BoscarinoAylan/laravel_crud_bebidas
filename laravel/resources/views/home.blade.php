@extends('main')

@section('content')

<div class="container">
    <br>
    <div class="row justify-content-center">
        <div class="colg"><h1>Cadastro de Bebidas</h1></div>
    </div>
    <br>
    <div class="row justify-content-center">
    <div class="col-2"><a href="{{url(route('indexBebida'))}}" class="btn btn-primary">Listar Bebidas</a></div>
        <div class="col-2"><a href="{{url(route('createBebida'))}}" class="btn btn-success">Cadastrar Bebida</a></div>
    </div>
</div>

@endsection