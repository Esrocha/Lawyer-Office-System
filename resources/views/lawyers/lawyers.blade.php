@extends('layouts.layout-pages')

@section('title', 'Advogados')

@section('content')

<div  class="container">
    <div  class="row">
        <form action=" {{route('lawyers.create')}} "  method="get">
            <button type="submit" class="btn btn-primary" >+ Cadastrar Advogado</button>
        </form>
        <h1>Advogados:</h1>
        <div  class="  col-md-12">
            @if(count($lawyers) == 0)
                <p>Não há advogados cadastrados. <a href=" {{route('lawyers.create')}} ">Cadastrar advogado</a></p>
            @else 
                @foreach($lawyers as $lawyer)
                    <div id="lawsuits-area" class="card mt-2 col-md-10">
                        <div class="card-body">
                            <p class="card-date">  </p>
                            <h5 class="card-title"><a href=" {{route('lawyers.show', $lawyer->id)}} ">Dr. {{$lawyer->name}}</a> </h5>
                            <hr>
                            <span class="card-client"> OAB: {{$lawyer->oab}} </span>
                        </div>
                    </div>
                @endforeach
            @endif
            
        </div>
    </div>
</div>

@endsection