@extends('layouts.full')
@section('title', '- Nossa Equipe')
@section('content')

<section class="container">
    <h1 class="section-equipe-title">Conheça nosso time</h1>
    <div class="row">
        @foreach($equipes as $equipe)
        <div class="col-md-4 col-12">
            <div class="equipe-box">
                <div class="equipe-img">
                    <img class="w-100 h-100 img-bordered-sm" src="../{{$equipe->pessoa_foto}}" alt="" srcset="">
                </div>
                <div class="equipe-text">
                    <h4>{{ $equipe->nome}} </h4>
                    <p class="text-muted">{{ $equipe->texto_sobre}} </p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</section>

@endsection