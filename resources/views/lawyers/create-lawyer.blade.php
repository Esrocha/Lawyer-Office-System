@extends('layouts.layout-pages')

@section('title', 'Novo Advogado')

@section('content')

<div id="include-lawsuit" class="container-fluid p-3">
    <div class="row">
        <h4>Formulário de inclusão de advogados:</h4>
        <div class="container col-md-10 offset-1 p-4">
            <form action="  {{ route('lawyers.store') }} " method="POST">
                <div class="form-group col-md-8">
                    <label for="name">Nome</label>
                    <input type="text" class="form-control" name="name" id="name">
                </div>
                
                <div class="form-group col-md-3" max >
                    <label for="CPF">CPF</label>
                    <input type="text" class="form-control" name="name" id="name">
                </div>
                <div class="form-group col-md-8">
                    <label for="OAB">OAB</label>
                    <input type="text" class="form-control" name="OAB" id="OAB">
                </div>
                <div class="inpuut-group">
                    <div class="form-group col-md-8">
                        <label for="street">Rua</label>
                        <input type="text" class="form-control" name="street" id="street">
                    </div>
                    <div class="form-group col-md-8">
                        <label for="number">Num.</label>
                        <input type="text" class="form-control" name="number" id="number">
                    </div>
                    <div class="form-group col-md-8">
                        <label for="complement">Complemento</label>
                        <input type="text" class="form-control" name="complement" id="complement">
                    </div>
                    <div class="form-group col-md-8">
                        <label for="district">Bairro</label>
                        <input type="text" class="form-control" name="district" id="district">
                    </div>
                    <div class="form-group col-md-8">
                        <label for="city">Cidade</label>
                        <input type="text" class="form-control" name="city" id="city">
                    </div>
                    <div class="form-group col-md-8">
                        <label for="state">Estado</label>
                        <input type="text" class="form-control" name="state" id="state">
                    </div>
                    <div class="form-group col-md-8">
                        <label for="CEP">CEP</label>
                        <input type="text" class="form-control" name="CEP" id="CEP">
                    </div>

                </div>

            </form>

        </div>
    </div>


</div>


@endsection
