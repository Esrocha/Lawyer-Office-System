<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lawsuit;
use App\Models\Lawyer;
use App\Models\Client;


class LawsuitController extends Controller
{
    public function index() {
       $lawsuits = Lawsuit::all();



        return view('lawsuits.lawsuits', compact('lawsuits'),  );
    }

    public function show($id) {

        $lawsuit = Lawsuit::findOrFail($id);

        $clients = $lawsuit->clients;
        $lawyers = $lawsuit->lawyer;
       


        return view('lawsuits.show', compact('lawsuit', 'clients', 'lawyers'));
    }

    public function create() {
        //Data of lawyers to use in select field form
        $lawyers = Lawyer::all();

        return view('lawsuits.create-lawsuit', compact('lawyers'));
    }

    public function store(Request $request) {
        $lawsuit = new Lawsuit;

        $client = Client::where('cpf', $request->cpf)->first();

        
        $lawsuit->number = $request->number;
        $lawsuit->digit =   $request->digit;
        $lawsuit->year = $request->year;
        $lawsuit->body = $request->body;
        $lawsuit->court = $request->court;
        $lawsuit->forum = $request->forum;
        $lawsuit->date = $request->date;
        $lawsuit->defendant = $request->defendant;
        //inser data of client with the data of object $client.
        $lawsuit->clientName = $client->name;
        $lawsuit->client_id = $client->id;

        //inser forein key of lawyer with the data of object $lawyer.
        $lawsuit->lawyer_id = $request->lawyer_id;

        $lawsuit->indemnity = $request->indemnity;
        $lawsuit->initial_page = $request->initial;
        $lawsuit->user_id = '1';
        $lawsuit->lawsuitpdf = '11111';

        $lawsuit->save();

        //Create relationship in pivot table
        $lawsuit = Lawsuit::where('number', $request->number)->first();
        $client = $lawsuit->client_id;
        $lawsuit->clients()->attach($client);
        
        return redirect('/processos')->with('msg', 'Processo incluido com sucesso!');
    }

    public function edit() {

    }

    public function update() {

    }

    public function destroy() {

    }
}
