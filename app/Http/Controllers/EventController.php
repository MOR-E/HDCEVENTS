<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index(){
        $nome = 'Pedro';
        $arr = [1,2,3,4];
        $nomes = ['nome1', 'nome2','nome5','nome4','nome3',];
    
        return view('welcome', [
            'nome' => $nome,
            'array' => $arr,
            'nomes' => $nomes
        ]);
    }

    public function create(){
        return view('events.create');
    }
}
