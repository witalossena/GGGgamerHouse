@extends('adminLte.dashboard')

@section('content')
<div class="row">
    <section class="col-lg-6 connectedSortable">
        <div class="card">
            <div class="card-header">
                <div class="card-body">
                    <div class="tab-content p-0">
                        <form method="POST" action="{{ route('formPatrocinador') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <div class="col-md-4 p-0">
                                    <div class="form-group">
                                        <label for="inputNomeDoTime">Nome do patrocinador</label>
                                        <input name="nome" type="text" class="form-control" id="inputNomeDoTime">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlFile1">imagem</label>
                                    <input type="file" name="imagem" class="form-control-file" id="exampleFormControlFile1">
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

    <section class="col-lg-6 connectedSortable">
        <div class="card">
            <div class="card-header">
                <div class="card-body">
                    <div class="tab-content p-0">
                        <table class="table table-hover text-nowrap">
                            <thead>
                                <tr>
                                    <th>nome</th>
                                    <th>logo</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if(count($patrocinadores) === 0)

                                @endif
                                @foreach ($patrocinadores as $patrocinador)
                                <tr>
                                    <td>{{ $patrocinador->nome}}</td>
                                    <form action="{{ route('deletePatrocinador', $patrocinador->id)}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <td><button type="submit" class="btn btn-danger">Deletar</button></td>
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