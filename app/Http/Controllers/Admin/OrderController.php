<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Order;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;

class OrderController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $order = Order::all();

        return view('backEnd.admin.order.index', compact('order'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('backEnd.admin.order.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $this->validate($request, ['billing_first_name' => 'required', 'billing_last_name' => 'required', 'billing_address_1' => 'required', 'billing_city' => 'required', 'billing_postcode' => 'required', 'billing_email' => 'required', 'billing_phone' => 'required', 'order_comments' => 'required', 'order_color_card' => 'required', 'order_color_letter' => 'required', 'order_date' => 'required', 'card' => 'required', ]);

        Order::create($request->all());

        Session::flash('message', 'Hemos recibido tu pedido con exito, por favor pasa a recoger en nuestra sucursal en la fecha que seleccionaste.');
        Session::flash('status', 'success');

        return redirect('/');
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
        $order = Order::findOrFail($id);

        return view('backEnd.admin.order.show', compact('order'));
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
        $order = Order::findOrFail($id);

        return view('backEnd.admin.order.edit', compact('order'));
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
        $this->validate($request, ['billing_first_name' => 'required', 'billing_last_name' => 'required', 'billing_address_1' => 'required', 'billing_city' => 'required', 'billing_postcode' => 'required', 'billing_email' => 'required', 'billing_phone' => 'required', 'order_comments' => 'required', 'order_color_card' => 'required', 'order_color_letter' => 'required', 'order_date' => 'required', 'card' => 'required', ]);

        $order = Order::findOrFail($id);
        $order->update($request->all());

        Session::flash('message', 'Order updated!');
        Session::flash('status', 'success');

        return redirect('admin/order');
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
        $order = Order::findOrFail($id);

        $order->delete();

        Session::flash('message', 'Order deleted!');
        Session::flash('status', 'success');

        return redirect('admin/order');
    }

}
