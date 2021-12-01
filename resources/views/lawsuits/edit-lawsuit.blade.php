@extends('layouts.layout-pages')

@section('title', 'Novo Processo')

@section('content')

<div id="include-lawsuit" class="container-fluid p-3" >
    <div class="row">
        <h4>Formulário de inclusão de processos:</h4>
        <div class="container col-md-10 offset-1 p-4">
            <form action="  {{route('lawsuits.update', $lawsuit->id)}} " method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div id="lawsuit-number" class="form-group col-md-6 d-flex justify-content-around rounded border border-light p-1">
                    <div class="form-goup col-md-3">
                        <label class="mt-2" for="number">Num.</label>
                        <br>
                        <input type="text" class="form-control" id="number" name="number" maxlength="7" value=" {{$lawsuit->number}} " required> 
                    </div>
                    
                    <div class="form-group col-md-1">
                        <label class="mt-2" for="number">Dig.</label>
                        <br>
                        <input type="text" class="form-control" id="digit" name="digit" maxlength="2" value="{{$lawsuit->digit}}" required> 
                    </div>
                    <div class="form-group col-md-2">
                        <label class="mt-2" for="number">Ano</label>
                        <br>
                        <input type="text" class="form-control" id="year" name="year" maxlength="4" value="{{$lawsuit->year}}" required> 
                    </div>
                    <div class="form-group col-md-1">
                        <label class="mt-2" for="number">Org.</label>
                        <br>
                        <input type="text" class="form-control" id="body" name="body" maxlength="1" value="{{$lawsuit->body}}" required> 
                    </div>
                    <div class="form-group col-md-1">
                        <label class="mt-2" for="number">Trib.</label>
                        <br>
                        <input type="text" class="form-control" id="court" name="court" maxlength="2" value="{{$lawsuit->court}}" required> 
                    </div>
                    <div class="form-group col-md-2">
                        <label class="mt-2" for="number">Forum</label>
                        <br>
                        <input type="text" class="form-control" id="forum" name="forum" maxlength="4" value="{{$lawsuit->forum}}" required> 
                    </div>
                </div>
                <div class="form-group col-md-2">
                    <label class="mt-2" for="date">Data do Processo</label>
                    <input type="date" class="form-control" id="date" name="date" value="{{$lawsuit->date}}" required >
                </div>
                <div class="col-md-12 justify-content-start d-flex">
                    @foreach($clients as $client)
                        <div class="form-group col-md-5 ">
                            <label class="mt-2" for="clientName">Cliente</label>
                            <input type="text" class="form-control" id="clientName" name="clientName" value="{{$client->name}}" required >
                        </div>
                        <div class="form-group col-md-2">
                            <label class="mt-2" for="cpf">CPF</label>
                            <input type="text" class="form-control" id="cpf" name="cpf" maxlength="11" value="{{$client->cpf}}" required >
                        </div>
                    @endforeach
                </div>
                <div class="form-group col-md-6">
                    <label class="mt-2" for="lawyer">Advogado</label>
                    <select class="form-select" name="lawyer_id" id="lawyer_id" >
                        @foreach($actualLawyer as $lawyer)
                        <option value=" {{$lawyer->id}} " selected> {{$lawyer->name}} </option>
                        @endforeach
                        @foreach($lawyers as $lawyer)
                        <option value=" {{$lawyer->id}} "> {{$lawyer->name}} </option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group col-md-6">
                    <label class="mt-2" for="defendant">Réu</label>
                    <input type="text" class="form-control" id="defendant" name="defendant" value="{{$lawsuit->defendant}}" required >
                </div>
                <div class="form-group col-md-6">
                    <label class="mt-2" for="indemnity">Indenização</label>
                    <input type="text" class="form-control" id="indemnity" name="indemnity" value="{{$lawsuit->indemnity}}" required >
                </div>
                <div class="form-group">
                    <label class="mt-2" for="initial_page">Inicial</label>
                    <textarea class="form-control" name="initial_page" id="initial_page" cols="100" rows="10"  >{{$lawsuit->initial_page}}</textarea>
                </div>
                <button type="submit" class="btn btn-success mt-2" >Salvar</button>
            </form>

        </div>
    </div>
    

</div>


@endsection
