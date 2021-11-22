@extends('layouts.layout-pages')

@section('title', 'Clientes')

@section('content')

<div class="container">
    <div class="row">
        <h4>Dados do Cliente:</h4>
        <div id="client-informations" style="background-color: aliceblue;">
            <div class="col-md-12 border-light p-3">
                <p>
                     <strong>Nome:</strong> {{ $client->name }}
                </p>
                <p>
                     <strong>CPF:</strong> {{ $client->cpf }} 
                </p>
                <p>
                    <strong>Endereço:</strong> {{ $client->street }}, {{ $client->number }} -
                        {{ $client->district }}, {{ $client->city }} - {{ $client->state }} 
                </p>
            </div>
            <h5>Processos do Cliente:</h5>
            <div class="col-md-12 p-3" id="lawsuitsofclient">
                <div>
                    @if(count($lawsuitsOfClient) == 0)
                        <p>Este cliente não tem processos.</p>
                    @else
                        @foreach($lawsuitsOfClient as $lawsuit)
                            <div id="lawsuits-area" class="card mt-2 col-md-10 p-3">
                                <div class="card-body">
                                    <p class="card-date"> </p>
                                    <h5 class="card-title"><a
                                            href="{{ route('lawsuits.show', $lawsuit->id) }}">{{ $lawsuit->number }}</a>
                                    </h5>
                                    <hr>
                                    <span> Réu: {{ $lawsuit->defendant }} </span>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>

    </div>
</div>

@endsection
