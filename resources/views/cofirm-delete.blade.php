@extends('main')

@section('content')
<div class="row justify-content-center">
    <form action="{{url(route('destroyBebida', $id))}}" method="POST">
        @method('DELETE')
        @csrf
        <h3>Tem certeza que deseja remover este registro?</h3>
        <br>
        <div class="container">
            <a class="btn btn-success" href="{{url(route('indexBebida'))}}">Voltar</a>
            <button class="btn btn-danger" type="submit">Deletar</button>
        </div>
    </form> 
</div>
@endsection