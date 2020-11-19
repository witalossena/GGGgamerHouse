@extends('adminLte.dashboard')
@section('content')
<div class="row">
    <section class="col-lg-6 connectedSortable">
        <div class="card">
            <div class="card-header">
                <div class="card-body">
                    <div class="tab-content p-0">
                        <form method="POST" action="{{ route('updateTeam', $tabelas->id) }}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="inputNomeDoTime">Nome do time</label>
                                            <input name="nome" value="{{ $tabelas->nome }}" type="text" class="form-control" id="inputNomeDoTime">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="inputFacebook">Facebook</label>
                                            <input name="input_facebook" value="{{ $tabelas->facebook }}" type="text" class="form-control" id="inputFacebook">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="inputVitoria">Vitórias</label>
                                            <input name="vitorias" value="{{ $tabelas->vitorias }}" type="text" class="form-control" id="inputVitoria" required>
                                        </div>
                                    </div>                                    
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="inputInstagram">Instagram</label>
                                            <input name="input_instagram" value="{{ $tabelas->instagram }}" type="text" class="form-control" id="inputInstagram">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="inputDerrota">Derrotas</label>
                                            <input name="derrotas" value="{{ $tabelas->derrotas }}" type="text" class="form-control" id="inputDerrota" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="inputTwitter">Twitter</label>
                                            <input name="input_twitter" value="{{ $tabelas->twitter }}" type="text" class="form-control" id="inputTwitter">
                                        </div>
                                    </div>
                                    <div class="col-md-6 offset-md-6">
                                        <div class="form-group">
                                            <label for="inputSite">Site</label>
                                            <input name="input_site" value="{{ $tabelas->site }}" type="text" class="form-control" id="inputSite">
                                        </div>
                                    </div>
                                </div>                    
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Enviar</button>
                            </div>
                        </form>
                    </div>
                    @if(session()->has('message'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session()->get('message') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    @endif
                </div>
            </div>
    </section>
</div>
@endSection