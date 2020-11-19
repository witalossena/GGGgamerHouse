<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Campeonato;
use App\Textos;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return redirect('https://www.gggamerhouse.com.br/blog/');
    }

    public function org()
    {
        $textos = Textos::find(1);
        return view('adminLte.organiza.index', compact('textos'));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id = 1)
    {
        $textos = Textos::find($id);
        return view('site.organizacao', compact('textos'));
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
        $textos = Textos::find($id);
        $textos->titulo_1 = $request->titulo_1;
        $textos->texto_1 = $request->texto_1;

        $textos->titulo_2 = $request->titulo_2;
        $textos->texto_2 = $request->texto_2;

        $textos->titulo_3 = $request->titulo_3;
        $textos->texto_3 = $request->texto_3;

        $textos->save();
        return back()->with('success', 'operação realizada com sucesso.');
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
