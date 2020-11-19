@extends('adminLte.dashboard')



@section('content')

<div class="row">
    <section class="col-lg-6 connectedSortable">
        <div class="card">
            <div class="card-header">
                <div class="card-body">
                    <div class="tab-content p-0">
                        <form method="POST" action="{{ route('updatePost', $textos->id)}}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="card-body">
                                

                                <div class="col-md-8 p-0">
                                    <div class="form-group">
                                        <label for="inputNomeDoTime">Titulo texto 1</label>
                                        <input autocomplete="off" value="{{$textos->titulo_1}}" name="titulo_1" type="text" class="form-control" id="inputNomeDoTime" required>
                                    </div>
                                </div>

                                <div class="col-md-12 p-0">
                                    <div class="form-group">
                                        <label for="inputNomeDoTime">texto 1</label>
                                        <textarea rows="5"  autocomplete="off" name="texto_1" type="text" class="form-control" id="inputNomeDoTime" required>
                                            {{ $textos->texto_1}}
                                        </textarea>
                                    </div>
                                </div>


                                <div class="col-md-8 p-0">
                                    <div class="form-group">
                                        <label for="inputNomeDoTime">Titulo texto 2</label>
                                        <input autocomplete="off" value="{{ $textos->titulo_2}}" name="titulo_2" type="text" class="form-control" id="inputNomeDoTime" required>
                                    </div>
                                </div>

                                <div class="col-md-12 p-0">
                                    <div class="form-group">
                                        <label for="inputNomeDoTime">texto 2</label>
                                        <textarea rows="5" autocomplete="off" name="texto_2" type="text" class="form-control" id="inputNomeDoTime" required>
                                            {{ $textos->texto_2}}
                                        </textarea>
                                    </div>
                                </div>

                                

                                <div class="col-md-8 p-0">
                                    <div class="form-group">
                                        <label for="inputNomeDoTime">Titulo texto 3</label>
                                        <input autocomplete="off" value="{{ $textos->titulo_3}}" name="titulo_3" type="text" class="form-control" id="inputNomeDoTime" required>
                                    </div>
                                </div>

                                <div class="col-md-12 p-0">
                                    <div class="form-group">
                                        <label for="inputNomeDoTime">texto 3</label>
                                        <textarea rows="5" value="{{ $textos->texto_3}}" autocomplete="off" name="texto_3" type="text" class="form-control" id="inputNomeDoTime" required>

                                        {{ $textos->texto_3}}


                                        </textarea>
                                    </div>
                                </div>


                         
         

                            </div>

                            <div class="card-footer">

                                <button type="submit" class="btn btn-primary btn-block">Enviar</button>

                            </div>

                        </form>

                    </div>



                </div>

            </div>

    </section>

   


</div>

@endSection