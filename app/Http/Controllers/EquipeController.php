<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Equipe;

class EquipeController extends Controller
{
    public function index()
    {
        $equipes = Equipe::all();
        return view('site.equipe', compact('equipes'));
    }


    public function show()
    {
        $equipes = Equipe::all();
        return view('adminLte.equipe.index', compact('equipes'));
    }

    public function store(Request $request)
    {
        $equipe = new Equipe();
        $equipe->nome = $request->nome;
        $equipe->texto_sobre = $request->funcao;

        $extension = $request->imagem->extension();
        $equipe->pessoa_foto = $request->imagem->move('storage/equipe', $request->nome . '-' . time() . "." . $extension);

        $equipe->save();
        return back()->with('success', 'Pagina alterada com sucesso');
    }

    public function destroy($id)
    {
        $equipe = Equipe::find($id);        
        unlink($equipe->pessoa_foto);
        $equipe::destroy($id);
        return back()->with('success', 'Equipe deletada com sucesso');
    }
}
