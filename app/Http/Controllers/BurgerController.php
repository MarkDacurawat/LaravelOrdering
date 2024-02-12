<?php

namespace App\Http\Controllers;

use App\Models\Burger;
use Illuminate\Http\Request;

class BurgerController extends Controller
{
    public function index(){
        $burgers = Burger::all()->sortBy('created_at');
        return view('burgers.index')->with('orders', $burgers);
    }

    public function create(){
        return view('burgers.create');
    }

    public function store(Request $request){
        $burger = new Burger;
        $burger->name = $request->input('name');
        $burger->type = $request->input('type');
        $burger->toppings = $request->input('toppings');
        $burger->save();
        return redirect('/')->with('message', 'Burger added successfully');
    }

    public function show($id){
        $burger = Burger::findOrFail($id);
        return view('burgers.show')->with('burger', $burger);
    }

    public function destroy($id){
        $burger = Burger::find($id);
        $burger->delete();
        return redirect('/burgers')->with('message', 'Burger deleted successfully');
    }
}
