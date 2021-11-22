@extends('layouts.layout-pages')

@section('title', $lawsuit->number )

@section('content')

<h1>Detales do processo:</h1>

<p>{{$lawsuit->number}}.{{$lawsuit->digit}}.{{$lawsuit->year}}.{{$lawsuit->body}}</p>


@foreach($client as $cliente)
<p> {{$cliente->name}} </p>
@endforeach

<p>Advoado: {{$lawyer->name}} OAB: {{$lawyer->OAB}} </p>

<p>Inicial: </p>
<p>{{$lawsuit->initial_page}} </p>


@endsection


