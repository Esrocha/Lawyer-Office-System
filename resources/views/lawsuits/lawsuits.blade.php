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
            @foreach($lawsuits as $lawsuit)
                <div id="lawsuits-area" class="card mt-2 col-md-10 p-3">
                    <div class="card-body">
                        <p class="card-date">  </p>
                        <h5 class="card-title"><a href="{{ route('lawsuits.show', $lawsuit->id)}}">{{$lawsuit->number}}</a> </h5>
                        <hr>
                        
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>

@endsection



