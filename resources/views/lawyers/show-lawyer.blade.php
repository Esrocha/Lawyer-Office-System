@extends('layouts.layout-pages')

@section('title', 'Advogado')

@section('content')

<div class="container">
    <div class="row">
        <h4>Dados do Advogado:</h4>
        <div id="lawyer-informations" class="border-light shadow" style="background-color: aliceblue;">
            <div class="col-md-12 border-light p-3">
                <p>
                     <strong>Nome:</strong> {{ $lawyer->name }}
                </p>
                <p>
                    <strong>CPF:</strong> {{ $lawyer->cpf }} <strong> OAB: </strong> {{$lawyer->oab}}
                </p>
                <p>
                    <strong>Endereço:</strong> {{ $lawyer->street }}, {{ $lawyer->number }} -
                        {{ $lawyer->district }}, {{ $lawyer->city }} - {{ $lawyer->state }}
                </p>
                <div class="col-md-3 d-flex">
                    <span><a class="btn btn-secondary m-1" href=" {{route('lawyers.edit', $lawyer->id)}} "><i class="bi bi-pencil" ></i> editar</a></span>
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
                                <form action="{{route('lawyers.destroy', $lawyer->id)}}" method="post">
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
            <h5>Processos do Advogado:</h5>
            <div class="col-md-12 p-3" id="lawsuits">
                <div>
                    @if(count($lawsuits) == 0)
                        <p>Este advogado não tem processos.</p>
                    @else
                        @foreach($lawsuits as $lawsuit)
                            <div id="lawsuits-area" class="card mt-2 col-md-10 p-3">
                                <div class="card-body">
                                    <h5 class="card-title"><a href="{{ route('lawsuits.show', $lawsuit->id) }}">{{ $lawsuit->number }}.{{$lawsuit->digit}}.{{$lawsuit->year}}.{{$lawsuit->body}}.{{$lawsuit->forum}}.{{date('d.m.Y', strtotime($lawsuit->date))}}</a></h5>
                                    <p class="card-date"> <strong>Data de cadastro:</strong>  {{date("d/m/Y", strtotime($lawsuit->created_at))}} </p>
                                    <hr>
                                    <span> <strong>Autor:</strong>  {{ $lawsuit->client_name }} </span>
                                    <span> <strong>Réu:</strong>  {{ $lawsuit->defendant }} </span>
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
