@extends('adminLte.dashboard')

@section('content')
@if(request()->is('admin/serie-a'))
    @php       
     $letter = "a"     
    @endphp
@elseif(request()->is('admin/serie-b'))    
    @php       
     $letter = "a"     
    @endphp

    @elseif(request()->is('admin/serie-c'))    
    @php       
     $letter = "c"     
    @endphp    
@endif

<div class="row">
    <section class="col-lg-6 connectedSortable">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title text-uppercase">
                    <i class="fas fa-chart-pie mr-1"></i>
                    TABELA SÉRIE {{$letter}}                    
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
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @if(request()->is('admin/serie-a'))
                            @foreach ($tabelas_a as $tabela_a)
                            <tr>
                                <td>{{ $loop->index+1 }}</td>
                                <td>{{ $tabela_a->nome}}</td>
                                <td>{{ $tabela_a->vitorias }}</td>
                                <td>{{ $tabela_a->derrotas }}</td>
                                <td><a href="{{ route('formTeamEdit', $tabela_a->id)}}" class="btn btn-primary">Gerenciar</a></td>
                                <form action="{{ route('deleteTeam', $tabela_a->id)}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <td><button type="submit" class="btn btn-danger">Excluir</button></td>
                                </form>
                            </tr>
                            @endforeach
                            @elseif(request()->is('admin/serie-b'))
                            @foreach ($tabelas_b as $tabela_b)
                            <tr>
                                <td>{{ $loop->index+1 }}</td>
                                <td>{{ $tabela_b->nome}}</td>
                                <td>{{ $tabela_b->vitorias }}</td>
                                <td>{{ $tabela_b->derrotas }}</td>
                                <td><a href="{{ route('formTeamEdit', $tabela_b->id)}}" class="btn btn-primary">Gerenciar</a></td>
                                <form action="{{ route('deleteTeam', $tabela_b->id)}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <td><button type="submit" class="btn btn-danger">Excluir</button></td>
                                </form>
                            </tr>
                            @endforeach
                            @elseif(request()->is('admin/serie-c'))
                            @foreach ($tabelas_c as $tabela_c)
                            <tr>
                                <td>{{ $loop->index+1 }}</td>
                                <td>{{ $tabela_c->nome}}</td>
                                <td>{{ $tabela_c->vitorias }}</td>
                                <td>{{ $tabela_c->derrotas }}</td>
                                <td><a href="{{ route('formTeamEdit', $tabela_c->id)}}" class="btn btn-primary">Gerenciar</a></td>
                                <form action="{{ route('deleteTeam', $tabela_c->id)}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <td><button type="submit" class="btn btn-danger">Excluir</button></td>
                                </form>
                            </tr>
                            @endforeach
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
</div>

@endSection