<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;


class OrderController extends Controller
{

    public function index()
    {
        $orders = Order::all();
        return view('orders', compact('orders'));
    }


    public function create()
    {
        return view('orders.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'invoice' => 'required',
            'date' => 'required',
            'notes' => 'required',
       ]);

       $orders = Order::create([
        'invoice' => $request->invoice,
        'date' => $request->date,
        'notes' => $request->notes,
        
       ]);

       return view('orders.show', compact('orders'));
    }


    public function show($id)
    {
        $orders = Order::find($id);
        return view('orders.show', compact('orders'));
    }


    public function edit($id)
    {
        $orders = Order::find($id);
        return view('orders.edit', compact('orders'));
    }


    public function update(Request $request, $id)
    {
        $orders = Order::find($id);
        $validated =$request->validate([
            'invoice' => 'required',
            'date' => 'required',
            'notes' => 'required',

        ]);

        $manufacturers->fill([
            'invoice' => $request->invoice,
            'date' => $request->date,
            'notes' => $request-notes,
        ]);

        $orders->save();
        return view('orders.show',compact('orders'));
    }

    public function destroy($id)
    {
        $orders = Order::find($id);
        $orders ->delete();
        return redirect('/orders');
    }
}


