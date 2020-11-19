@extends('adminLte.dashboard')

@section('content')
<div class="row">
    <section class="col-lg-6 connectedSortable">
        <div class="card">
            <div class="card-header">
                <div class="card-body">
                    <div class="tab-content p-0">
                        <form method="POST" action="{{ route('registerQuemSomos') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <div class="col-md-4 p-0">
                                    <div class="form-group">
                                        <label for="inputNomeDoTime">Nome</label>
                                        <input name="nome" type="text" class="form-control" id="inputNomeDoTime">
                                    </div>
                                </div>
                                <div class="col-md-4 p-0">
                                    <div class="form-group">
                                        <label for="inputNomeDoTime">Função</label>
                                        <input name="funcao" type="text" class="form-control" id="inputNomeDoTime">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlFile1">imagem de apresentação</label>
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
                        @if(count($equipes) > 0)
                        <table class="table table-hover text-nowrap">
                            <thead>
                                <tr>
                                    <th>nome</th>
                                    <th>logo</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($equipes as $equipe)
                                <tr>
                                    <td>{{ $equipe->nome}}</td>
                                    <form action="{{ route('deleteEquipe', $equipe->id)}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <td><button type="submit" class="btn btn-danger">Deletar</button></td>
                                    </form>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        @else
                        <p class="text-bold">Não há equipes cadastradas para mostrar</p>
                        @endif
                    </div>
                </div>
            </div>
    </section>
</div>
@endSection