<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\shopping_list;

class ShoppingController extends Controller
{
    public function index()
    {
        return view('index');
    }
}
