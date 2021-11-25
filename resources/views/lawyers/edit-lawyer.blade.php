@extends('layouts.layout-pages')

@section('title', 'Editar Advogado')

@section('content')

<div id="include-advogado" class="container-fluid p-3">
    <div class="row">
        <h4>Formulário de inclusão de advogado:</h4>
        <div class="col-md-10 offset-1 p-4">
            <form action="  {{ route('lawyers.update', $lawyer->id) }} " method="POST">
                @csrf
                @method('PUT')
                <div class="form-group col-md-8">
                    <label for="name">Nome</label>
                    <input type="text" class="form-control" name="name" id="name" value=" {{$lawyer->name}} ">
                </div>
                <div class="form-group col-md-3" max >
                    <label for="cpf">CPF</label>
                    <input type="text" class="form-control" name="cpf" id="cpf" maxlength="11" value="{{$lawyer->cpf}} " >
                </div> 
                <div class="form-group col-md-3" max >
                    <label for="cpf">OAB</label>
                    <input type="text" class="form-control" name="oab" id="oab" maxlength="11" value="{{$lawyer->oab}} " >
                </div> 
                <div class="inpuut-group">
                    <div class="form-group col-md-8">
                        <label for="street">Rua</label>
                        <input type="text" class="form-control" name="street" id="street" value=" {{$lawyer->street}} ">
                    </div>
                    <div class="form-group col-md-8">
                        <label for="number">Num.</label>
                        <input type="text" class="form-control" name="number" id="number" value=" {{$lawyer->number}} " >
                    </div>
                    <div class="form-group col-md-8">
                        <label for="complement">Complemento</label>
                        <input type="text" class="form-control" name="complement" id="complement" value=" {{$lawyer->complement}} " >
                    </div>
                    <div class="form-group col-md-8">
                        <label for="district">Bairro</label>
                        <input type="text" class="form-control" name="district" id="district" value=" {{$lawyer->district}} ">
                    </div>
                    <div class="form-group col-md-8">
                        <label for="city">Cidade</label>
                        <input type="text" class="form-control" name="city" id="city" value=" {{$lawyer->city}} ">
                    </div>
                    <div class="form-group col-md-8">
                        <label for="state">Estado</label>
                        <input type="text" class="form-control" name="state" id="state" value=" {{$lawyer->state}} ">
                    </div>
                    <div class="form-group col-md-8">
                        <label for="cep">CEP</label>
                        <input type="text" class="form-control" name="cep" id="cep" maxlength="8" value=" {{$lawyer->cep}} " >
                    </div>
                </div>
                <button class="btn btn-success mt-2" type="submit">Salvar</button>
            </form>

        </div>
    </div>


</div>


@endsection