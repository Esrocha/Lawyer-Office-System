@extends('layouts.layout-pages')

@section('title', $lawsuit->number )

@section('content')

<h1>Detales do processo:</h1>

<p>{{$lawsuit->number}}.{{$lawsuit->digit}}.{{$lawsuit->year}}.{{$lawsuit->body}}</p>


@foreach($clients as $cliente)
<p> {{$cliente->name}} </p>
@endforeach

{{$lawyers->
    name}}

<p>Inicial: </p>
<p>{{$lawsuit->initial_page}} </p>


@endsection


