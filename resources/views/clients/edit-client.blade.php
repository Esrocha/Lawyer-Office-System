@extends('layouts.layout-pages')

@section('title', 'Editar Cliente')

@section('content')

<div id="include-client" class="container-fluid p-3">
    <div class="row">
        <h4>Formulário de inclusão de cliente:</h4>
        <div class="col-md-10 offset-1 p-4">
            <form action="  {{ route('clients.update', $client->id) }} " method="POST">
                @csrf
                @method('PUT')
                <div class="form-group col-md-8">
                    <label for="name">Nome</label>
                    <input type="text" class="form-control" name="name" id="name" value=" {{$client->name}} ">
                </div>
                <div class="form-group col-md-3" max >
                    <label for="cpf">CPF</label>
                    <input type="text" class="form-control" name="cpf" id="cpf" maxlength="11" value="{{$client->cpf}} " >
                </div> 
                <div class="inpuut-group">
                    <div class="form-group col-md-8">
                        <label for="street">Rua</label>
                        <input type="text" class="form-control" name="street" id="street" value=" {{$client->street}} ">
                    </div>
                    <div class="form-group col-md-8">
                        <label for="number">Num.</label>
                        <input type="text" class="form-control" name="number" id="number" value=" {{$client->number}} " >
                    </div>
                    <div class="form-group col-md-8">
                        <label for="complement">Complemento</label>
                        <input type="text" class="form-control" name="complement" id="complement" value=" {{$client->complement}} " >
                    </div>
                    <div class="form-group col-md-8">
                        <label for="district">Bairro</label>
                        <input type="text" class="form-control" name="district" id="district" value=" {{$client->district}} ">
                    </div>
                    <div class="form-group col-md-8">
                        <label for="city">Cidade</label>
                        <input type="text" class="form-control" name="city" id="city" value=" {{$client->city}} ">
                    </div>
                    <div class="form-group col-md-8">
                        <label for="state">Estado</label>
                        <input type="text" class="form-control" name="state" id="state" value=" {{$client->state}} ">
                    </div>
                    <div class="form-group col-md-8">
                        <label for="cep">CEP</label>
                        <input type="text" class="form-control" name="cep" id="cep" maxlength="8" value=" {{$client->cep}} " >
                    </div>
                </div>
                <button class="btn btn-success mt-2" type="submit">Salvar</button>
            </form>

        </div>
    </div>


</div>


@endsection