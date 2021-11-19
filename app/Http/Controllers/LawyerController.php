<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lawyer;


class LawyerController extends Controller
{
    
    public function index() {
       
    }

    public function show() {

    }

    public function create() {

    }

    public function store() {
        $lawyer = new Lawyer;

        $lawyer->name = 'ze legal';
        $lawyer->CPF = '4889498373';
        $lawyer->OAB =   'RJ0057';
        $lawyer->street = 'Rua quase';
        $lawyer->number = '1';
        $lawyer->complement = '';
        $lawyer->district = 'Fonseca';
        $lawyer->state = 'RJ';
        $lawyer->CEP = '24567890';
        $lawyer->user_id = '1';
        

        $lawyer->save();

        return redirect('/processos')->with('msg', 'advogado incluido com sucesso!');
    }

    public function edit() {

    }

    public function update() {

    }

    public function destroy() {

    }
}
