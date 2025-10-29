<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ShoppingList;

class ShoppingController extends Controller
{
    public function index()
    {
        $shoppings=ShoppingList::all();
        return view('index', compact('shoppings'));
    }

    public function store(Request $request){
        $shopping = $request->only(['content', 'quantity']);
        ShoppingList::create($shopping);
        return redirect('/');
    }

}
