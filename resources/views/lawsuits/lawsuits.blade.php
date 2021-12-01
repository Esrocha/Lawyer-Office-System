@extends('layouts.layout-pages')

@section('title', 'Processos')

@section('content')

<div  class="container">
    <form action=" {{route('lawsuits.create')}} "  method="get">
        <button type="submit" class="btn btn-success" >+ Incluir Processo</button>
    </form>
    <h1>Procesos:</h1>
    <div  class="row">
        <div  class="col-md-12">
            @if(count($lawsuits) == 0)
                <p>Não há processos cadastrados. <a href=" {{route('lawsuits.create')}} ">Cadastrar Pocesso.</a> </p>
            @else
                @foreach($lawsuits as $lawsuit)
                    <div id="lawsuits-area" class="card mt-2 col-md-10 p-3">
                        <div class="card-body">
                            <p class="card-date">  </p>
                            <h5 class="card-title">
                                <a href="{{ route('lawsuits.show', $lawsuit->id)}}">
                                    {{$lawsuit->number}}.{{$lawsuit->digit}}.{{$lawsuit->year}}.{{$lawsuit->body}}.{{$lawsuit->court}}.{{$lawsuit->forum}}.{{date("d.m.Y", strtotime($lawsuit->date))}}
                                </a>
                            </h5>
                            <hr>
                            <div class="">
                                <span class="mx-2"><strong>Autor:</strong>  {{$lawsuit->clientName}}</span> <span class="mx-2"> <strong>Réu:</strong> {{$lawsuit->defendant}} </span>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
    </div>
</div>

@endsection



