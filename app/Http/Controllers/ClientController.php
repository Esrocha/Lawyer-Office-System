<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;


class ClientController extends Controller
{
    
    public function index() {
        $clients = Client::all();

       return view('clients.clients', compact('clients'));
    }

    public function show() {

    }

    public function create() {
        return view('clients.create-client');
    }

    public function store() {
        $client = new client;

        $client = new client;
        //dd($request);
        $client->name = $request->name;
        $client->cpf = $request->cpf;
        $client->street = $request->street;
        $client->number = $request->number;
        $client->complement = $request->complement;
        $client->district = $request->district;
        $client->city = $request->city;
        $client->state = $request->state;
        $client->cep = $request->cep;
        $client->user_id = '1';
        
        $client->save();

        return redirect('/clientes')->with('msg', 'Cliente incluido com sucesso!');
        
    }

    public function edit() {

    }

    public function update() {

    }

    public function destroy() {

    }
}
