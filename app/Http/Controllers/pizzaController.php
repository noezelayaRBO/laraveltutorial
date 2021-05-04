<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Models\Pizza;


class pizzaController extends Controller
{
    public function __construct(){
        //$this->middleware('auth');

    }

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
    public function store(){
        //error_log(request('name'));
        //error_log(request('type'));
        //error_log(request('base'));

        $pizza = new Pizza();

        $pizza->name = request('name');
        $pizza->type = request('type');
        $pizza->base = request('base');
        $pizza->toppings = request('toppings');
        $pizza->price = 10;
        error_log($pizza);
       
        $pizza->save();

        return redirect('/')->with('mssg', 'Thanks for your order');
    }
    public function destroy($id){

        $pizza = Pizza::findOrFail($id);
        $pizza->delete();

        return redirect('/')->with('mssg', 'Complete');
    }
}
