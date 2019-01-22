@extends('main')

@section('content')

<div class="container">
    <form class="form-horizontal" method="POST" action="{{isset($bebida->id)? url(route('updateBebida', $bebida->id)): url(route('storeBebida'))}}">
        @csrf
        @if (isset($bebida->id))
            @method('PUT')
        @endif
        <div class="row justify-content-center">
            <div class="col col-md-6 ">

                <div class="form-group">
                    <label for="nomeBebida" class="control-label col-xs-2">Nome da bebida</label>
                    <div class="col-xs-10">
                    <input type="text" required class="form-control" id="nomeBebida" name="nomeBebida" placeholder="Nome" value="{{$bebida->nome}}">
                    </div>
                </div>
                <div class="form-group">
                    <label for="valorBebida" class="control-label col-xs-2">Valor da Bebida</label>
                    <div class="col-xs-10">
                        <input oninput="valorBebidaInput(this.value)" type="number" step="any" required class="form-control" id="valorBebida" name="valorBebida" placeholder="Valor" value="{{$bebida->valor}}">
                    </div>
                </div>
                <div class="form-group">
                    <label for="descricaoBebida" class="control-label col-xs-2">Descrição da Bebida</label>
                    <div class="col-xs-10">
                        <input type="text" required class="form-control" id="descricaoBebida" name="descricaoBebida" placeholder="Descrição" value="{{$bebida->descricao}}">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-xs-offset-2 col-xs-10">
                        <div class="checkbox">
                            <label><input type="checkbox" id="bebidaAlcoolica" name="bebidaAlcoolica" {{$bebida->alcoolica? 'checked': ''}}> Essa bebida possui álcool</label>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-xs-offset-2 col-xs-10">
                        <button type="submit" class="btn btn-primary">Salvar</button>
                    </div>
                </div>
            </div>
            
        </div>
    </form>
</div>

@endsection