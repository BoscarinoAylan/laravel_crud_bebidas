<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bebida;

class BebidasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bebidas = Bebida::select('id', 'nome')->get();
        return view('lista-bebidas')->with(['bebidas' => $bebidas]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // return '';
        return view('form-bebida')->with(['bebida' => new Bebida()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nomeBebida = $request->input('nomeBebida');
        $valorBebida = $request->input('valorBebida');
        $descricaoBebida = $request->input('descricaoBebida');
        $bebidaAlcoolica = $request->input('bebidaAlcoolica') !== null;

        //TODO: validar estes dados antes de gravar no banco
        $bebida = Bebida::create([
            'nome' => $nomeBebida,
            'valor' => $valorBebida,
            'descricao' => $descricaoBebida,
            'alcoolica' => $bebidaAlcoolica
        ]);

        $bebida->save();

        return redirect(route('indexBebida'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $bebida = Bebida::findOrFail($id);
        return view('detalhes-bebida')->with([
            'bebida' => $bebida
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $bebida = Bebida::findOrFail($id);
        return view('form-bebida')->with(['bebida' => $bebida]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //TODO: adicionar uma validação nos dados recebidos
        $bebida = Bebida::findOrFail($id);
        $bebida->nome = $request->input('nomeBebida');
        $bebida->valor = $request->input('valorBebida');
        $bebida->descricao = $request->input('descricaoBebida');
        $bebida->alcoolica = $request->input('bebidaAlcoolica') !== null;
        $bebida->save();
        return redirect(route('indexBebida'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $bebida = Bebida::findOrFail($id);
        $bebida->delete();
        return redirect(route('indexBebida'));
    }


    public function confirmDelete($id)
    {
        return view('cofirm-delete')->with(['id' => $id]);
    }
}
