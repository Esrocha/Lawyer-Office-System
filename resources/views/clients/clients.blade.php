@extends('layouts.layout-pages')

@section('title', 'Clientes')

@section('content')

<div  class="container">
    <form action=" {{route('clients.create')}} "  method="get">
        <button type="submit" class="btn btn-success" >+ Incluir Cliente</button>
    </form>
    <h1>Clientes:</h1>
    <div  class="row">
        <div  class="col-md-12">
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
        </div>
    </div>
</div>

@endsection