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
            @foreach($data as $lawsuit)
                <div id="lawsuits-area" class="card mt-2 col-md-10">
                    <div class="card-body">
                        <p class="card-date">  </p>
                        <h5 class="card-title"><a href="{{ route('lawsuits.show', $lawsuit->id)}}">{{$lawsuit->number}}</a> </h5>
                        <hr>
                        <span class="card-client"> Autor:</span>
                        <span class="card-client"> Réu: Machado de Assis </span>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>

@endsection



