<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Card;
use App\User;

class GeneralController extends Controller
{
    public function bodas()
    {
        $bodas = Card::all();
	    return view('frontEnd.boda')
	    ->with('bodas', $bodas);
    }

    public function singleProduct($id)
    {   
        $card = Card::find($id);
        return view('frontEnd.single-product')
        ->with('card', $card);
    }

    public function process(Request $request)
    {
        $quantity = $request->input('quantity');
        $card = Card::find($request->input('card'));
        $total = $quantity * $card->price;
        return view('frontEnd.cart')
        ->with('quantity', $quantity)
        ->with('total', $total)
        ->with('card', $card);
        
    }
}
