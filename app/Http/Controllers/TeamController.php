<?php

namespace App\Http\Controllers;

use App\Campeonato;
use Illuminate\Http\Request;
use App\http\Requests\TeamRequest;


class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tabelas_b = Campeonato::where('serie_id', 2)
            ->orderBy('vitorias', 'desc')
            ->get();
        $tabelas_a = Campeonato::where('serie_id', 1)
            ->orderBy('vitorias', 'desc')
            ->get();
        $tabelas_c = Campeonato::where('serie_id', 3)
            ->orderBy('vitorias', 'desc')
            ->get();
        return view('adminLte.register.form',  compact(['tabelas_a', 'tabelas_b', 'tabelas_c']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TeamRequest $request) /*registerTeam */
    {
        $campeonato = new Campeonato;
        $campeonato->nome = $request->nome;
        $campeonato->serie_id = $request->serie;

        $campeonato->facebook = $request->facebook_input;
        $campeonato->instagram = $request->instagram_input;
        $campeonato->twitter = $request->twitter_input;
        $campeonato->site = $request->site_input;

        if ($request->hasFile('imagem')) {
            $extension = $request->imagem->extension();
            $campeonato->logo_url = $request->imagem->move('storage/campeonato', time() . "." . $extension);
        }
        $campeonato->save();
        return redirect()->route('formTeamRegister')->with('success', 'Equipe cadastrada com sucesso');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tabelas = Campeonato::find($id);
        return view('adminLte.teams.edit', compact('tabelas'));
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
        $tabela = Campeonato::find($id);
        $tabela->nome = $request->get('nome');
        $serie = $tabela->serie_id;
        $tabela->derrotas = $request->get('derrotas');
        $tabela->vitorias = $request->get('vitorias');

        $tabela->facebook = $request->get('input_facebook');
        $tabela->instagram = $request->get('input_instagram');
        $tabela->twitter = $request->get('input_twitter');
        $tabela->site = $request->get('input_site');
        $tabela->save();

        if ($serie === 1) {
            return redirect()->route('serieA')->with('success', 'salvo com sucesso.');
        } elseif ($serie === 2) {
            return redirect()->route('serieB')->with('success', 'salvo com sucesso.');
        } elseif ($serie === 3) {
            return redirect()->route('serieC')->with('success', 'salvo com sucesso.');
        } else {
            return redirect()->route('/admin')->with('error', 'erro ao salvar');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $team = Campeonato::find($id);
        unlink($team->logo_url);
        $team::destroy($id);

        $serie = $team->serie_id;

        if ($serie === 1) {
            return redirect()->route('serieA')->with('message', 'operação realizada com sucesso.');
        } elseif ($serie === 2) {
            return redirect()->route('serieB')->with('message', 'operação realizada com sucesso.');
        } else {
            return redirect()->route('serieC')->with('message', 'operação realizada com sucesso.');
        }
    }
}
