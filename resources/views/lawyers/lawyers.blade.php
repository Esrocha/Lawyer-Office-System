@extends('layouts.layout-pages')

@section('title', 'Advogados')

@section('content')

<div  class="container">
    <form action=" {{route('lawyers.create')}} "  method="get">
        <button type="submit" class="btn btn-success" >+ Incluir Advogado</button>
    </form>
    <h1>Advogados:</h1>
    <div  class="row">
        <div  class="col-md-12">
            @foreach($lawyers as $lawyer)
                <div id="lawsuits-area" class="card mt-2 col-md-10">
                    <div class="card-body">
                        <p class="card-date">  </p>
                        <h5 class="card-title"><a href="{{ route('lawyers.show', $lawyer->id)}}">{{$lawyer->name}}</a> </h5>
                        <hr>
                        <span class="card-client"> OAB: {{$lawyer->OAB}} </span>
                        
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>

@endsection