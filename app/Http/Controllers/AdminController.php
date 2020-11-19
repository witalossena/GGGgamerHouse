<?php

namespace App\Http\Controllers;
use App\Campeonato;
class AdminController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tabelas_a = Campeonato::where('serie_id', 1)
            ->orderBy('vitorias', 'desc')
            ->get();
        $tabelas_b = Campeonato::where('serie_id', 2)
            ->orderBy('vitorias', 'desc')
            ->get();
        $tabelas_c = Campeonato::where('serie_id', 3)
            ->orderBy('vitorias', 'desc')
            ->get();
        return view('adminLte.teams.index', compact(['tabelas_a', 'tabelas_b', 'tabelas_c',]));
    }

    public function indexSerieA()
    {
        $tabelas_a = Campeonato::where('serie_id', 1)
            ->orderBy('vitorias', 'desc')
            ->get();
        return view('adminLte.teams.team', compact('tabelas_a'));
    }

    public function indexSerieB()
    {
        $tabelas_b = Campeonato::where('serie_id', 2)
            ->orderBy('vitorias', 'desc')
            ->get();
        return view('adminLte.teams.team', compact('tabelas_b'));
    }

    public function indexSerieC()
    {
        $tabelas_c = Campeonato::where('serie_id', 3)
            ->orderBy('vitorias', 'desc')
            ->get();
        return view('adminLte.teams.team', compact('tabelas_c'));
    }

}
