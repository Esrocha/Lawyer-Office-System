@extends('layouts.layout-pages')

@section('title', 'Clientes')

@section('content')

<div  class="container">
    <form action=" {{route('clients.create')}} "  method="get">
        <button type="submit" class="btn btn-success" >+ Cadastrar Cliente</button>
    </form>
    <h3>Clientes:</h3>
    <div  class="row">
        <div  class="col-md-12">
            @if(count($clients) == 0)
                <p>Não há clientes cadastrados. <a href=" {{route('clients.create')}} ">Cadastrar clientes</a></p>
            @else 
                @foreach($clients as $client)
                <div id="lawsuits-area" class="card mt-2 col-md-10">
                    <div class="card-body">
                        <p class="card-date">  </p>
                        <h5 class="card-title"><a href=" {{route('clients.show', $client->id)}} ">{{$client->name}}</a> </h5>
                        <hr>
                        <span class="card-client"> CPF: {{$client->cpf}} </span>
                        
                    </div>
                </div>
                @endforeach
            @endif
           
        </div>
    </div>
</div>

@endsection