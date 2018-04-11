<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Card;
use App\User;
use DB;

class GeneralController extends Controller
{
    public function bodas()
    {
        // $bodas = Card::all();
        $bodas = DB::table('cards')->where('category', '=', 1)->get();

	    return view('frontEnd.boda')
	    ->with('bodas', $bodas);
    }

    public function infantiles()
    {
        // $bodas = Card::all();
        $bodas = DB::table('cards')->where('category', '=', 2)->get();

	    return view('frontEnd.infantiles')
	    ->with('bodas', $bodas);
    }

    public function foto()
    {
        // $bodas = Card::all();
        $bodas = DB::table('cards')->where('category', '=', 3)->get();

	    return view('frontEnd.foto')
	    ->with('bodas', $bodas);
    }

    public function laser()
    {
        // $bodas = Card::all();
        $bodas = DB::table('cards')->where('category', '=', 4)->get();

	    return view('frontEnd.laser')
	    ->with('bodas', $bodas);
    }

    public function quince()
    {
        // $bodas = Card::all();
        $bodas = DB::table('cards')->where('category', '=', 5)->get();

	    return view('frontEnd.quince')
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

    public function order (Request $request)
    {
        $input = $request->all();
        dd($input);
    }

    public function contact()
    {
        return view('frontEnd.contact');
    }
}
