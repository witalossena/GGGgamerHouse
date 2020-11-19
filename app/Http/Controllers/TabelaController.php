<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Campeonato;
use App\Patrocinadores;
use App\Calendario;
use Symfony\Contracts\Service\Attribute\Required;

class TabelaController extends Controller
{



    public function indexOrganizacao()
    {
        return view('site.organizacao');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $calendarios = Calendario::where('serie_id', 1)
            ->OrderBy('serie_id', 'asc')
            ->get();
        $tabelas_a = Campeonato::where('serie_id', 1)
            ->orderBy('vitorias', 'desc')
            ->orderBy('derrotas', 'asc')
            ->orderBy('nome', 'asc')
            ->get();
        $patrocinadores = Patrocinadores::all();

        return view('site.tabela-a', compact(['tabelas_a', 'patrocinadores', 'calendarios']));
    }

    public function tabelaSerieB()
    {
        $calendarios = Calendario::where('serie_id', 2)
            ->OrderBy('serie_id', 'asc')
            ->get();
        $tabelas_b = Campeonato::where('serie_id', 2)
            ->orderBy('vitorias', 'desc')
            ->orderBy('derrotas', 'asc')
            ->orderBy('nome', 'asc')
            ->get();

        $patrocinadores = Patrocinadores::all();

        return view('site.tabela-b', compact(['tabelas_b', 'patrocinadores', 'calendarios']));
    }

    public function tabelaSerieC()
    {
        $calendarios = Calendario::where('serie_id', 3)
            ->OrderBy('serie_id', 'asc')
            ->get();
        $tabelas_c = Campeonato::where('serie_id', 3)
            ->orderBy('vitorias', 'desc')
            ->orderBy('derrotas', 'asc')
            ->orderBy('nome', 'asc')
            ->get();

        $patrocinadores = Patrocinadores::all();

        return view('site.tabela-c', compact(['tabelas_c', 'patrocinadores', 'calendarios']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $campeonato = new Campeonato;
        $campeonato->nome = $request->nome;
        $campeonato->logo_url = $request->logo_url;
        $campeonato->serie_id = $request->serie;

        $campeonato->save();
        return redirect()->route('admin')->with('success', 'Time cadastrado com sucesso.');
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
