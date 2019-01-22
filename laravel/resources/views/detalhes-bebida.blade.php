@extends('main')

@section('content')
<div class="row justify-content-center">
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <div class="col justify-content-center">
                <h2 class="card-title">{{$bebida->nome}}</h2>
                <h5 class="card-subtitle mb-2 text-muted">{{$bebida->alcoolica? 'contém álcool' : 'não contém álcool'}}</h5>
                <p class="card-text">{{$bebida->descricao}}</p>
                <h4 class="card-subtitle mb-2 text-muted">{{$bebida->valor}}</h4>
                <div class="row">
                    <a href="{{url(route('editBebida', $bebida->id))}}" class="card-link btn btn-success">Editar</a>
                    <a href="{{url(route('confirmDelete', $bebida->id))}}" class="card-link btn btn-danger">Deletar</a>
                </div>
            </div>
        </div>    
    </div>
</div>
@endsection
