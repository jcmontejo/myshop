<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Card;
use App\Category;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;
use Image;

class CardController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $card = Card::all();

        return view('backEnd.admin.card.index', compact('card'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {   
        $categorys = Category::pluck('name', 'id');
        return view('backEnd.admin.card.create')
        ->with('categorys', $categorys);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $this->validate($request, ['title' => 'required', 'description' => 'required', 'price' => 'required', 'image' => 'required', 'category' => 'required', ]);

        $product = Card::create($request->all());

        if ($request->hasFile('image')) {
			$photo = $request->file('image');
			$filename = time() . '.' . $photo->getClientOriginalExtension();
            Image::make($photo)->resize(300, 300)->save(public_path('/uploads/' . $filename));
            $product->image = $filename;
            $product->save();
        }


        Session::flash('message', 'Invitación creada.');
        Session::flash('status', 'success');

        return redirect('admin/card');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return Response
     */
    public function show($id)
    {
        $card = Card::findOrFail($id);

        return view('backEnd.admin.card.show', compact('card'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $card = Card::findOrFail($id);
        $categorys = Category::pluck('name', 'id');

        return view('backEnd.admin.card.edit', compact('card', 'categorys'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     *
     * @return Response
     */
    public function update($id, Request $request)
    {
        $this->validate($request, ['title' => 'required', 'description' => 'required', 'price' => 'required', 'image' => 'required', 'category' => 'required', ]);

        $card = Card::findOrFail($id);
        $card->update($request->all());

        Session::flash('message', 'Invitación actualizada.');
        Session::flash('status', 'success');

        return redirect('admin/card');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $card = Card::findOrFail($id);

        $card->delete();

        Session::flash('message', 'Invitación eliminada.');
        Session::flash('status', 'success');

        return redirect('admin/card');
    }

}
