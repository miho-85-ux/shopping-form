<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ShoppingList;
use App\Http\Requests\ShoppingRequest;

class ShoppingController extends Controller
{
    public function index()
    {
        $shoppings=ShoppingList::all();
        return view('index', compact('shoppings'));
    }

    public function store(ShoppingRequest $request){
        $shopping = $request->only(['content', 'quantity']);
        ShoppingList::create($shopping);
        return redirect('/')->with('message', '買い物リストを作成しました');
    }

}
