<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;


use Illuminate\Http\Request;
use \App\Patrocinadores;

class PatrocinadorController extends Controller
{
    public function index()
    {
        $patrocinadores = Patrocinadores::all();
        return view('adminLte.patrocinadores.index', compact('patrocinadores'));

    }

    public function store(Request $request)
    {
        $patrocinadores = new Patrocinadores();
        $patrocinadores->nome = $request->nome;

        $extension = $request->imagem->extension();
        $patrocinadores->logo = $request->imagem->move('storage/patrocinadores', $request->nome . '-' . time() . "." . $extension);

        $patrocinadores->save();
        return back()->with('success', 'Patrocinador salvo com sucesso');
    }

    public function destroy($id)
    {
        $patrocinador = Patrocinadores::find($id);        
        unlink($patrocinador->logo);
        $patrocinador::destroy($id);
        return back()->with('success', 'Patrocinador deletado com sucesso');
    }
}
