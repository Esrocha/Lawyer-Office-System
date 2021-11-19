<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;


class ClientController extends Controller
{
    
    public function index() {
       
    }

    public function show() {

    }

    public function create() {

    }

    public function store() {
        $client = new client;

        $client->name = 'patricio';
        $client->CPF = '8599990497';
        $client->street = 'Rua clara';
        $client->number = '1';
        $client->complement = '';
        $client->district = 'icarai';
        $client->state = 'RJ';
        $client->CEP = '24567890';
        $client->user_id = '1';
        

        $client->save();

        return redirect('/processos')->with('msg', 'advogado incluido com sucesso!');
    }

    public function edit() {

    }

    public function update() {

    }

    public function destroy() {

    }
}
