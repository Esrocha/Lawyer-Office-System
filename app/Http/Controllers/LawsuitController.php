<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lawsuit;
use App\Models\Lawyer;
use App\Models\Client;


class LawsuitController extends Controller
{
    public function index() {
       $lawsuits = Lawsuit::All();



        return view('lawsuits.lawsuits', compact('lawsuits'),  );
    }

    public function show($id) {

        $lawsuit = Lawsuit::find($id);
        //dd($lawsuit);
        $clients = $lawsuit->clients; //Relationship Model function
        //dd($clients);
        $lawyers = $lawsuit->lawyer; //Relationship Model function
        //dd($lawyers);


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
        //insert data of client with the data of object $client.
        $lawsuit->clientName = $client->name;
        $lawsuit->client_id = $client->id;

        //insert forein key of lawyer with the data of object $lawyer.
        $lawsuit->lawyer_id = $request->lawyer;

        $lawsuit->indemnity = $request->indemnity;
        $lawsuit->initial_page = $request->initial_page;
        $lawsuit->user_id = '1';
        $lawsuit->lawsuitpdf = '11111';

        $lawsuit->save();

        //Relationship
        $lawsuit = Lawsuit::where('number', $request->number)->first();
        
        //Create relationship with client on pivot table.
        $client = $lawsuit->client_id;
        $lawsuit->clients()->attach($client);
        
        //Create relationship with lawyer on pivot table.
        $lawyer = $lawsuit->lawyer_id;
        $lawsuit->lawyer()->attach($lawyer);

        return redirect('/processos')->with('msg', 'Processo incluido com sucesso!');
    }

    public function edit($id) {
        $lawsuit = Lawsuit::where('id', $id)->first();

        $lawyers = Lawyer::All();
        $actualLawyer = $lawsuit->lawyer;
        //dd($isLawyer);
        $clients = $lawsuit->clients; //Relationship Model function


        return view('lawsuits.edit-lawsuit', compact('lawsuit', 'lawyers', 'clients', 'actualLawyer'));
    }

    public function update(Request $request) {
        $lawsuit = $request->all();

        Lawsuit::findOrFail($request->id)->update($lawsuit);

        return redirect()->route('lawsuits.show', $request->id)->with('msg', 'Processo atualizado com sucesso!');
    }

    public function destroy($id) {
        Lawsuit::findOrFail($id)->delete();

        return redirect()->route('lawsuits.index')->with('msg', 'Processo excluido com sucesso!');
    }
}
