@extends('layouts.layout-pages')

@section('title', 'Novo Advogado')

@section('content')

<div id="include-lawyer" class="container-fluid p-3">
    <div class="row">
        <div class="col-md-10 offset-1 p-4">
            <h4>Formulário de inclusão de advogados:</h4>
            <form action=" {{ route('lawyers.store') }} " method="POST">
                @csrf
                <div class="form-group mt-2 col-md-8">
                    <label for="name">Nome</label>
                    <input type="text" class="form-control" name="name" id="name">
                </div>
                <div class="form-group mt-2 col-md-3" max >
                    <label for="cpf">CPF</label>
                    <input type="text" class="form-control" name="cpf" id="cpf" maxlength="11" >
                </div>
                <div class="form-group mt-2 col-md-3">
                    <label for="oab">OAB</label>
                    <input type="text" class="form-control" name="oab" id="oab" maxlength="8">
                </div>
                <div class="inpuut-group">
                    <div class="form-group mt-2 col-md-8">
                        <label for="street">Rua</label>
                        <input type="text" class="form-control" name="street" id="street">
                    </div>
                    <div class="form-group mt-2 col-md-8">
                        <label for="number">Num.</label>
                        <input type="text" class="form-control" name="number" id="number">
                    </div>
                    <div class="form-group mt-2 col-md-8">
                        <label for="complement">Complemento</label>
                        <input type="text" class="form-control" name="complement" id="complement">
                    </div>
                    <div class="form-group mt-2 col-md-8">
                        <label for="district">Bairro</label>
                        <input type="text" class="form-control" name="district" id="district">
                    </div>
                    <div class="form-group mt-2 col-md-8">
                        <label for="city">Cidade</label>
                        <input type="text" class="form-control" name="city" id="city">
                    </div>
                    <div class="form-group mt-2 col-md-8">
                        <label for="state">Estado</label>
                        <input type="text" class="form-control" name="state" id="state">
                    </div>
                    <div class="form-group mt-2 col-md-8">
                        <label for="cep">CEP</label>
                        <input type="text" class="form-control" name="cep" id="cep" maxlength="8" >
                    </div>
                </div>
                <button class="btn btn-success mt-2" type="submit">Salvar</button>
            </form>

        </div>
    </div>


</div>


@endsection
