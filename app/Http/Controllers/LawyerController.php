<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lawyer;


class LawyerController extends Controller
{
    
    public function index() {
       $lawyers = Lawyer::all();

       return view('lawyers.lawyers', compact('lawyers'));
    }

    public function show($id) {
        $lawyer = Lawyer::where('id', $id)->first();
        $lawsuitsOfLawyer = $lawyer->lawsuits;

        return view('lawyers.show-lawyer', compact('lawyer', 'lawsuitsOfLawyer'));
    }

    public function create() {
        return view('lawyers.create-lawyer');
    }

    public function store(Request $request) {
        $lawyer = new Lawyer;
        //dd($request);
        $lawyer->name = $request->name;
        $lawyer->cpf = $request->cpf;
        $lawyer->oab =   $request->oab;
        $lawyer->street = $request->street;
        $lawyer->number = $request->number;
        $lawyer->complement = $request->complement;
        $lawyer->district = $request->district;
        $lawyer->city = $request->city;
        $lawyer->state = $request->state;
        $lawyer->cep = $request->cep;
        $lawyer->user_id = '1';
        

        $lawyer->save();

        return redirect('/advogados')->with('msg', 'Advogado incluido com sucesso!');
    }

    public function edit($id) {
        $lawyer = Lawyer::where('id', $id)->first();

        return view('lawyers.edit-lawyer', compact('lawyer'));
    }

    public function update(Request $request) {
        $lawyer = $request->all();

        Lawyer::findOrFail($request->id)->update($lawyer);

        return redirect()->route('lawyers.show', $request->id)->with('msg', 'Cadastro atualizado com sucesso!');
    }

    public function destroy($id) {
        Lawyer::findOrFail($id)->delete();

        return redirect()->route('lawyers.index')->with('msg', 'Cadastro excluido com sucesso!');
    }
}
