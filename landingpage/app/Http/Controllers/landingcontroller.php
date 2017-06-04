<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\landing;

class landingcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //return view('landing.create');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('landing.home');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        $landing = new landing;
        $this->validate($request,[
                'nome'=>'required:landings',
                'telefone'=>'required|unique:landings',
                'email'=>'required|unique:landings',
                'cep'=>'required:landings',
                'rua'=>'required:landings',
                'bairro'=>'required:landings',
                'uf'=>'required:landings',
                'ibge'=>'required:landings'
            ]);
        $landing->nome = $request->input('nome');
        $landing->telefone = $request->input('telefone');
        $landing->email = $request->input('email');
        $landing->cep = $request->input('cep');
        $landing->rua = $request->input('rua');
        $landing->bairro = $request->input('bairro');
        $landing->cidade = $request->input('cidade');
        $landing->estado = $request->input('uf');
        $landing->ibge = $request->input('ibge');
        $landing->save();
        \Session::flash('flash_message','Salvo com sucesso. Entraremos em contato! ');
        return redirect('landing/create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
