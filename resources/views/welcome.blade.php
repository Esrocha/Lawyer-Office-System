@extends('layouts.layout-home')

@section('title', 'Advogados')

@section('content')
<div class="container-fluid">
    <div class="container">
        <div class="row ">
            <div class="col-md-6 offset-3 mt-2 mb-1 ">
                <form class="d-flex" action="  " method="get">
                    <input class="form-control me-2" type="search" placeholder="Digite o número do processo, advogado, cliente, forum." aria-label="Search">
                    <button class="btn btn-secondary" type="submit"><ion-icon name='outline-search'><i class="bi bi-search"></i></button>
                </form>
            </div>
        </div>
    </div>
    <div id="options">
        <div class="container">
            <div class="row">
                <div class="  d-inline-flex regular-shadow justify-content-around ">
                    <a href="{{route('lawsuits.index')}}">
                        <p>Processos</p>
                    </a>
                    <a href="">
                        <p>Advogados</p>
                    </a>
                    <a href="">
                        <p>Clientes</p>
                    </a>
                    <a href="">
                        <p>Dashboard</p>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection