@extends('layouts.full')
@section('title', '- Organização')
@section('content')
<section class="container">
    <div class="row">
        <div class="col-md-7 col-12">
            <div>
                <h1 class="title-page">{{ $textos->titulo_1 }}</h1>
                <p class="paragraph-text">
                    {{ $textos->texto_1 }}
                </p>
                <h1 class="title-page">{{ $textos->titulo_2}}</h1>
                <p class="paragraph-text">
                    {{ $textos->texto_2 }}
                </p>
            </div>
            <div class="container p-0 mb-4">
                <div class="app-donwload-box">
                    <a target="_blank" class="btn btn-download" href="https://play.google.com/store/apps/details?id=br.com.app_liga_gg&hl=pt-BR">
                        baixe nosso aplicativo
                    </a>
                </div>
            </div>
        </div>
        <div class="col-md-5 col-12 align-items-center d-flex justify-content-center">
            <div id="logo-org" class="left-image shadow-lg lan-house-image rounded">
                <img class="w-100 h-100" src="{{ asset('images/gallery/org-image.jpg')}}" alt="{{ $textos->titulo_2}}">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-5 col-org">
            <div class="lan-house-image shadow-lg">
                <img class="w-100 h-100 rounded img" src="{{ asset('images/lan-house-1.jpg')}}" alt="{{ $textos->titulo_3}}">
            </div>
        </div>
        <div class="col-md-7 subscribed-section">
            <h1 class="title-page">{{ $textos->titulo_3}}</h1>
            <p class="paragraph-text">
                {{ $textos->texto_3 }}
            </p>
        </div>
    </div>

</section>

@endsection