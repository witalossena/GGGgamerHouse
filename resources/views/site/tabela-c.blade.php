@extends('layouts.full')
@section('title', '- Série C')
@section('content')
<div class="container">
    @foreach($tabelas_c as $tabela_c)
    <div class="row table-row">
        <div class="table-col col-md-1 col-1">
            <div class="number">
                {{ $loop->index+1 }}
            </div>
        </div>
        <div class="table-col col-md-1 p-0 col-4">
            <div class="image-table">
                <img class="w-100 h-100" src="../{{ $tabela_c->logo_url}}" alt="{{$tabela_c->nome}}" srcset="">
            </div>
        </div>
        <div class="table-col-variant col-md-4 p-0 col-6">
            <div class="box-team">
                <div class="team-name">
                    {{ $tabela_c->nome}}
                </div>
                <div class="wins">
                    {{ $tabela_c->vitorias}}V-{{ $tabela_c->derrotas}}D
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>
<div class="container">
    @foreach($calendarios as $calendario)
    <div class="calendario-box">
        <h1 class="title-variant-1">{{ $calendario->nome}}</h1>
        <img class="w-100 h-100 pb-5" src="storage/{{ $calendario->table_url_image }}" alt="" srcset="">
    </div>
    @endforeach
</div>
<div class="container">
    <h1 class="title-variant-1">patrocinadores</h1>
    <div class="row j-cont-center">
        @foreach($patrocinadores as $patrocinador)
        <div class="col-md-2 col-6">
            <div class="box-patrocinador">
                <div class="patrocinador-logo">
                    <img class="w-100 h-100" src="../storage/{{ $patrocinador->logo }}" alt="{{ $patrocinador->nome}}" srcset="">
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection