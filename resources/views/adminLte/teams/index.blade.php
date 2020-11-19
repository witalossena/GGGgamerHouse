@extends('adminLte.dashboard')

@section('content')
<div class="row">
    <section class="col-lg-4 connectedSortable">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">
                    <i class="fas fa-chart-pie mr-1"></i>
                    tabela serie A
                </h3>
            </div>
            <div class="card-body">
                <div class="tab-content p-0">
                    <table class="table table-hover text-nowrap">
                        <thead>
                            <tr>
                                <th>posição</th>
                                <th></th>
                                <th>vitórias</th>
                                <th>derrotas</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($tabelas_a as $tabela_a)

                            <tr>
                                <td>{{ $loop->index+1 }}</td>
                                <td>{{ $tabela_a->nome}}</td>
                                <td>{{ $tabela_a->vitorias }}</td>
                                <td>{{ $tabela_a->derrotas }}</td>
                            </tr>
                            @endforeach


                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
    <section class="col-lg-4 connectedSortable">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">
                    <i class="fas fa-map-marker-alt mr-1"></i>
                    Tabela serie b
                </h3>
            </div>
            <div class="card-body">
                <div class="tab-content p-0">
                    <table class="table table-hover text-nowrap">
                        <thead>
                            <tr>
                                <th>posição</th>
                                <th></th>
                                <th>vitórias</th>
                                <th>derrotas</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($tabelas_b as $tabela_b)
                            <tr>
                                <td>{{ $loop->index+1 }}</td>
                                <td>{{ $tabela_b->nome}}</td>
                                <td>{{ $tabela_b->vitorias }}</td>
                                <td>{{ $tabela_b->derrotas }}</td>
                            </tr>
                            @endforeach


                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>

    <section class="col-lg-4 connectedSortable">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">
                    <i class="fas fa-map-marker-alt mr-1"></i>
                    Tabela serie c
                </h3>
            </div>
            <div class="card-body">
                <div class="tab-content p-0">
                    <table class="table table-hover text-nowrap">
                        <thead>
                            <tr>
                                <th>posição</th>
                                <th></th>
                                <th>vitórias</th>
                                <th>derrotas</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($tabelas_c as $tabela_c)
                            <tr>
                                <td>{{ $loop->index+1 }}</td>
                                <td>{{ $tabela_b->nome}}</td>
                                <td>{{ $tabela_b->vitorias }}</td>
                                <td>{{ $tabela_b->derrotas }}</td>
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