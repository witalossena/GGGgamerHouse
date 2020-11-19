@extends('adminLte.dashboard')

@section('content')
<div class="row">
    <section class="col-lg-6 connectedSortable">
        <div class="card">
            <div class="card-header">
                <div class="card-body">
                    <div class="tab-content p-0">
                        <form method="POST" action="{{ route('formCalendar') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <div class="col-md-4 p-0">
                                    <div class="form-group">
                                        <label for="inputNomeDoTime">Titulo do calendário</label>
                                        <input autocomplete="off" name="nome" type="text" class="form-control" id="inputNomeDoTime" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlFile1">imagem</label>
                                    <input type="file" name="imagem" class="form-control-file" id="exampleFormControlFile1" required>
                                </div>
                                <div class="col-md-4 p-0">
                                    <div class="form-group">
                                        <label>Série do calendario</label>
                                        <select name="serie" class="form-control" required>
                                            <option value=""></option>
                                            <option value="1">Série A</option>
                                            <option value="2">Série B</option>
                                            <option value="3">Série C</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Enviar</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
    </section>
    <section class="col-lg-12 connectedSortable">
        <div class="card">
            <div class="card-header">
                <div class="card-body">
                    <div class="tab-content p-0">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">titulo</th>
                                    <th scope="col">serie</th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($calendarios as $calendario)
                                <tr>
                                    <th scope="row">{{ $loop->index+1 }}</th>
                                    <td>{{ $calendario->nome }}</td>
                          
                                    <td>@if($calendario->serie_id == 1)
                                        calendario serie A

                                        @elseif($calendario->serie_id == 2)
                                        calendario serie B

                                        @elseif($calendario->serie_id == 3)
                                        calendario serie C
                                        @endif
                                    </td>
                                    <form method="POST" action="{{ route('deleteCalendar', $calendario->id)}}">
                                        @csrf
                                        @method('DELETE')
                                        <td><button class="btn btn-danger">deletar</button></td>
                                    </form>
                                </tr>
                                @endforeach


                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
    </section>

</div>
@endSection