@extends('main')
@section('content')
    
<div class="container">
    <ul class="list-group">
        @foreach ($bebidas as $bebida)
        <div class="row justify-content-center">
            <li class="list-group-item col-5">
                <a href="{{url(route('showBebida', $bebida->id))}}" class="btn btn-info col-12">{{$bebida->nome}}</a>
            </li>    
        </div>    
        @endforeach
    </ul>
</div>

@endsection
