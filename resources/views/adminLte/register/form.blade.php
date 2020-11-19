@extends('adminLte.dashboard')

@section('content')
<div class="row">
    <section class="col-lg-6 connectedSortable">
        <div class="card">
            <div class="card-header">
                <div class="card-body">
                    <div class="tab-content p-0">
                        <form method="POST" action="{{ route('registerTeam') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="inputNomeDoTime">Nome do time</label>
                                            <input value="{{old('nome')}}" name="nome" type="text" class="form-control @error ('nome') is-invalid @enderror" id="inputNomeDoTime">
                                        </div>

                                        @error('nome')
                                        <div class="invalid-feedback d-block" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </div>
                                        @enderror

                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="inputFacebook">Facebook</label>
                                            <input name="facebook_input" type="text" class="form-control" id="inputFacebook">
                                        </div>
                           
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Série do time</label>
                                            <select name="serie" class="form-control @error('serie') is-invalid @enderror">
                                                <option></option>
                                                <option value="1">Série A</option>
                                                <option value="2">Série B</option>
                                                <option value="3">Série C</option>
                                            </select>
                                        </div>
                                        @error('serie')
                                        <div class="invalid-feedback d-block m-0 p-0">
                                            <strong>{{ $message }}</strong>
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="inputSite">Site</label>
                                            <input name="site_input" type="text" class="form-control" id="inputSite">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleFormControlFile1">Imagem</label>
                                            <input type="file" name="imagem" class="form-control-file is-invalid" id="exampleFormControlFile1">
                                        </div>
                                        @error('imagem')
                                        <div class="invalid-feedback d-block m-0 p-0" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="inputTwitter">Twitter</label>
                                            <input name="twitter_input" type="text" class="form-control" id="inputTwitter">
                                        </div>
                                    </div>
                                    <div class="col-md-6 offset-md-6">
                                        <div class="form-group">
                                            <label for="inputInstagram">Instagram</label>
                                            <input name="instagram_input" type="text" class="form-control" id="inputInstagram">
                                        </div>
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