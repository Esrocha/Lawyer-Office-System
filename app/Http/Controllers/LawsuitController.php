<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lawsuit;
use App\Models\Client;


class LawsuitController extends Controller
{
    public function index() {
        $data = Lawsuit::orderBy('date', 'desc')->get();

        return view('lawsuits.lawsuits', compact('data') );
    }

    public function show($id) {

        $lawsuit = Lawsuit::find($id);

        $client = $lawsuit->clients;
        //dd($client);
        $lawyer = $lawsuit->lawyer;


        return view('lawsuits.show', compact('lawsuit', 'client', 'lawyer'));
    }

    public function create() {

        return view('lawsuit.create-lawsuit');
    }

    public function store() {
        $lawsuit = new Lawsuit;

        //insertion on object.
        $lawsuit->number = '7896512';
        $lawsuit->digit =   '66';
        $lawsuit->year = '2021';
        $lawsuit->body = '6';
        $lawsuit->court = '77';
        $lawsuit->forum = '5454';
        $lawsuit->date = '2021-07-22';
        $lawsuit->client_id = '2';
        $lawsuit->lawyer_id = '1';
        $lawsuit->indemnity = '7000.00';
        $lawsuit->initial_page = 'testando exiição nome do cliente';
        $lawsuit->user_id = '1';
        $lawsuit->lawsuitpdf = '11111';

        $lawsuit->save();

        //Create relationship in pivot table
        $lawsuit = Lawsuit::where('number', 7896512)->first();
        $client = $lawsuit->client_id;
        $lawsuit->clients()->attach($client);
        
        return redirect('/processos')->with('msg', 'Processo incluido com sucesso!');
    }

    public function clientLawsuit() {
        $form = ['2'];
        $lawsuit = Lawsuit::where('id', 11)->first();
        $lawsuit->clients()->attach($form);

        return redirect('/processos');
    }

    public function edit() {

    }

    public function update() {

    }

    public function destroy() {

    }
}
