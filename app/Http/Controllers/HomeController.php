<?php

namespace App\Http\Controllers;
use App\Campeonato;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $tabelas_b = Campeonato::where('serie_id', 2)
            ->orderBy('vitorias', 'desc')
            ->orderBy('derrotas', 'asc')
            ->orderBy('nome', 'desc')
            ->get();
        $tabelas_a = Campeonato::where('serie_id', 1)
            ->orderBy('vitorias', 'desc')
            ->orderBy('derrotas', 'asc')
            ->orderBy('nome', 'desc')
            ->get();
        $tabelas_c = Campeonato::where('serie_id', 3)
            ->orderBy('vitorias', 'desc')
            ->orderBy('derrotas', 'asc')
            ->orderBy('nome', 'desc')
            ->get();
            
        return view('adminLte.table', compact(['tabelas_a', 'tabelas_b', 'tabelas_c']));
    }
}
