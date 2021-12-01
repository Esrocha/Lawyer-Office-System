@extends('layouts.layout-pages')

@section('title', $lawsuit->number )

@section('content')

<div class="container">
    <div class="row">
        <h4>Detales do processo</h4>
        <div id="lawyer-informations" class="border-light shadow" style="background-color: aliceblue;">
            <div class="col-md-12 border-light p-3">
                <p>
                     <strong>Processo: </strong> <span>{{$lawsuit->number}}.{{$lawsuit->digit}}.{{$lawsuit->year}}.{{$lawsuit->body}}.{{$lawsuit->forum}}.{{date('d.m.Y', strtotime($lawsuit->date))}}</span>
                </p>
                @foreach($clients as $client)
                <p>
                    <strong>Autor:</strong><a href=" {{route('clients.show', $client->id)}} "> {{ $client->name }}</a>  
                </p>
                @endforeach
                @foreach($lawyers as $lawyer)
                <p> 
                    <strong>Advogado:</strong><a href=" {{route('lawyers.show', $lawyer->id)}} "> {{$lawyer->name}}    </a>  <strong>OAB:</strong> {{$lawyer->oab}}
                </p> 
                @endforeach
                <p>
                    <strong>Réu:</strong> {{ $lawsuit->defendant }}
                </p>
                <div class="col-md-3 d-flex">
                    <span><a class="btn btn-secondary m-1" href=" {{route('lawsuits.edit', $lawsuit->id)}} "><i class="bi bi-pencil" ></i> editar</a></span>
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
                                <form action="{{route('lawsuits.destroy', $lawsuit->id)}}" method="post">
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
            <h5>Inicial do Processo:</h5>
            <div class="col-md-10 offset-1 initial">
                {{$lawsuit->initial_page}}
            </div>
            <hr>
            <h5>Atualizações do Processo:</h5>
            <div class="col-md-12 p-3" id="lawsuitsoflawyer">
                
            </div>
        </div>

    </div>
</div>

@endsection


