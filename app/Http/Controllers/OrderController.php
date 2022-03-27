<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Hardware;
use App\Models\Buyer;

class OrderController extends Controller
{

    public function index()
    {
        $orders = Order::all();
        return view('orders', compact('orders'));
    }


    public function create()
    {
        $hardware = Hardware::all();
        $buyers = Buyer::all();
        return view('orders.create', compact('hardware', 'buyers'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'invoice' => 'required',
            'date' => 'required',
            'buyer_id'=> 'required',
            'hardware_id'=> 'required',
       ]);

       $orders = Order::create([
        'invoice' => $request->invoice,
        'date' => $request->date,
        'buyer_id'=> $request->buyer_id,
        'hardware_id'=> $request->hardware_id,
        
       ]);

       return view('orders.show', compact('orders'));
    }


    public function show($id)
    {
        $orders = Order::find($id);
        $hardware = Hardware::all();
        $buyers = Buyer::all();
        return view('orders.show', compact('hardware', 'buyers', 'orders'));
    }


    public function edit($id)
    {
        $orders = Order::find($id);
        $hardware = Hardware::all();
        $buyers = Buyer::all();
        return view('orders.edit', compact('hardware', 'buyers', 'orders'));
    }


    public function update(Request $request, $id)
    {
        $orders = Order::find($id);
        $validated =$request->validate([
            'invoice' => 'required',
            'date' => 'required',
            'buyer_id'=> 'required',
            'hardware_id'=> 'required',
        ]);

        $orders->fill([
            'invoice' => $request->invoice,
            'date' => $request->date,
            'buyer_id'=> $request->buyer_id,
            'hardware_id'=> $request->hardware_id,
        ]);

        $orders->save();
        return view('orders.show',compact('orders'));
    }

    public function destroy($id)
    {
        $orders = Order::find($id);
        $orders->delete();
        return redirect('/orders');
    }
}


