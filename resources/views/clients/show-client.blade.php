@extends('layouts.layout-pages')

@section('title', 'Clientes')

@section('content')

<div class="container">
    <div class="row">
        <h4>Dados do Cliente:</h4>
        <div id="client-informations" class="border-light shadow" style="background-color: aliceblue;">
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
                <div class="col-md-3 d-flex">
                    <span><a class="btn btn-secondary m-1" href=" {{route('clients.edit', $client->id)}} "><i class="bi bi-pencil" ></i> editar</a></span>
                    <button type="button" class="btn btn-danger m-1" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="bi bi-trash"></i>Excluir</button>
                    <!-- MODAL -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Excluir registro</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <p>Esta ação é irreversível.</p>
                                <p>deseja realmente EXCLUIR este registro?</p>
                            </div>
                            <div class="modal-footer">
                                <form action="#" >
                                    <button type="submit" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                                </form>
                                <form action="{{route('clients.destroy', $client->id)}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Sim, Excluir</button>
                                </form>
                            </div>
                        </div>
                        </div>
                    </div>
                    <!--END MODAL-->
                </div>
            </div>
            <hr>
            <h5>Processos do Cliente:</h5>
            <div class="col-md-12 p-3" id="lawsuitsofclient">
                <div>
                    @if(count($lawsuitsOfClient) == 0)
                        <p>Este cliente não tem processos.</p>
                    @else
                        @foreach($lawsuitsOfClient as $lawsuit)
                            <div id="lawsuits-area" class="card mt-2 col-md-10 p-3">
                                <div class="card-body">
                                    <p class="card-date"> {{$lawsuit->date}} </p>
                                    <h5 class="card-title"><a href="{{ route('lawsuits.show', $lawsuit->id) }}">{{ $lawsuit->number }}</a></h5>
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
