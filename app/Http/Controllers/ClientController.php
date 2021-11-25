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

    public function show($id) {
        $client = Client::where('id', $id)->first();
        $lawsuitsOfClient = $client->lawsuits;

        return view('clients.show-client', compact('client', 'lawsuitsOfClient'));
    }

    public function create() {
        return view('clients.create-client');
    }

    public function store(Request $request) {
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

    public function edit($id) {
        $client = Client::where('id', $id)->first();

        return view('clients.edit-client', compact('client'));
    }

    public function update(Request $request) {
        $client = $request->all();

        Client::findOrFail($request->id)->update($client);

        return redirect()->route('clients.show', $request->id)->with('msg', 'Cadastro atualizado com sucesso!');
    }

    public function destroy($id) {
        Client::findOrFail($id)->delete();

        return redirect()->route('clients.index')->with('msg', 'Cadastro excluido com sucesso!');
    }
}
