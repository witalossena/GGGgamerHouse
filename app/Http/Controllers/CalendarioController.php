<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Calendario;
use Illuminate\Support\Facades\DB;

class CalendarioController extends Controller
{

    public function index()
    {
        $calendarios = DB::table('calendario')
            ->whereIn('serie_id', [1, 2, 3])
            ->orderBy('serie_id', 'asc')
            ->get();
        return view('adminLTe.calendario.index', compact('calendarios'));
    }

    public function store(Request $request)
    {

        if ($request->hasFile('imagem')) {
            $calendarios = new Calendario;
            $calendarios->nome = $request->nome;
            $calendarios->serie_id = $request->serie;

            if ($request->file('imagem')->isValid()) {
                $validated = $request->validate([
                    'nome' => 'string|max:200',
                    'imagem' => 'mimes:jpeg,png,Jpg',
                ]);
                $extension = $request->imagem->extension();
                // $calendarios->table_url_image = $request->imagem->storeAs('calendarios', time().'-'.$validated['nome'].".".$extension);
                $calendarios->table_url_image = $request->imagem->move('storage/calendarios', time() . '-' . $validated['nome'] . "." . $extension);

                $calendarios->save();
                return back()->with('success', 'calendario cadastrado com sucesso.');
            }
            return back()->with('error', 'erro ao cadastrar.');
        }
    }

    public function destroy($id)
    {
        $calendario = Calendario::find($id);
        unlink($calendario->table_url_image);
        $calendario::destroy($id);
        return back()->with('success', 'calendario deletado com sucesso');
    }
}
