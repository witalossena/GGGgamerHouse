@extends('layouts.full')
@section('title', '- Série A')
@section('content')

<div class="container">
    @foreach($tabelas_a as $tabela_a)
    <div class="row table-row">
        <div class="table-col col-md-1 col-1">
            <div class="number">
                {{ $loop->index+1 }}
            </div>
        </div>
        <div class="table-col col-md-1 p-0 col-4">
            <div class="image-table">
                <img class="w-100 h-100" src="../{{ $tabela_a->logo_url}}" alt="{{$tabela_a->nome}}" srcset="">
            </div>
        </div>
        <div class="table-col-variant col-md-4 p-0 col-6">
            <div class="box-team">
                <div class="team-name" data-toggle="collapse" data-target="#time-{{$tabela_a->id}}" aria-expanded="false" aria-controls="multiCollapseExample2">
                    {{ $tabela_a->nome}}
                </div>
                <div class="wins">
                    {{ $tabela_a->vitorias}}V-{{ $tabela_a->derrotas}}D
                </div>
            </div>
        </div>

        <div class="col-md-4 col-social-logo">
            <ul class="nav">
                <li class="nav-item">
                    @isset($tabela_a->facebook)
                    <a class="nav-link active" target="_blank" href="{{ $tabela_a->facebook}}">
                        <img class="w-100 h-100" src="{{asset('images/icons/facebook-logo.png')}}" alt="">
                    </a>
                    @endisset
                </li>
                <!-- instagram -->
                <li class="nav-item">
                    @isset($tabela_a->instagram)
                    <a class="nav-link active instagram" target="_blank" href="{{ $tabela_a->instagram}}">
                        <img class="w-100 h-100" src="{{asset('images/icons/instagram-logo.png')}}" alt="">
                    </a>
                    @endisset
                </li>

                <!-- twitter -->
                <li class="nav-item">
                    @isset($tabela_a->twitter)
                    <a class="nav-link active twitter" target="_blank" href="{{ $tabela_a->twitter}}">
                        <img class="w-100 h-100" src="{{asset('images/icons/twitter-logo.png')}}" alt="">
                    </a>
                    @endisset
                </li>

                <!-- web -->
                <li class="nav-item">
                    @isset($tabela_a->site)
                    <a class="nav-link active" target="_blank" href="{{ $tabela_a->site}}">
                        <img class="w-100 h-100" src="{{asset('images/icons/web-logo.png')}}" alt="">
                    </a>
                    @endisset
                </li>
            </ul>
        </div>
    </div>
    @endforeach

    <div class="container tabela-section">
        <h1 class="section-title">calendários</h1>
        @foreach($calendarios as $calendario)
        <div class="calendario-box">
            <h3 class="title-variant-1">{{ $calendario->nome}}</h3>
            <img class="w-100 h-100 pb-5" src="../{{ $calendario->table_url_image }}" alt="{{$calendario->nome}}">
        </div>
        @endforeach
    </div>

    <div class="container tabela-section">
        <h1 class="section-title">patrocinadores</h1>
        <div class="row">
            @foreach($patrocinadores as $patrocinador)
            <div class="col-md-2 col-6">
                <div class="box-patrocinador">
                    <div class="patrocinador-logo">
                        <img class="w-100 h-100" src="../{{ $patrocinador->logo }}" alt="{{ $patrocinador->nome}}">
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

</div>


@endsection