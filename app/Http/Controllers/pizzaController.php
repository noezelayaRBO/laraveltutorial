<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Models\Pizza;


class pizzaController extends Controller
{
    public function index(){
        
        return view('pizza.index',[ 
        
            'name' => request('name'),
            'age' => request('age'),
            ]);
    }
    public function show($id){
        
        $pizza = Pizza::findOrFail($id);

        return view('pizza.show',['pizza' => $pizza]);
    }
    public function create(){
        return view('pizza.create');
    }
    public function welcome(){
        return view('welcome');
    }
}
