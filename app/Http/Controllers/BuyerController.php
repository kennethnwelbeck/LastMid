<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Buyer;


class BuyerController extends Controller
{

    public function index()
    {
        $buyers = Buyer::all();
        return view('buyers', compact('buyers'));
    }


    public function create()
    {
        return view('buyers.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'first' => 'required',
            'last' => 'required',
            'email' => 'required',
            'phone' => 'required',
       ]);

       $buyers = Buyer::create([
        'first' => $request->first,
        'last' => $request->last,
        'email' => $request->email,
        'phone' => $request->phone,
        
       ]);

       return view('buyers.show', compact('buyers'));
    }


    public function show($id)
    {
        $orders = Buyer::find($id);
        return view('buyers.show', compact('buyers'));
    }


    public function edit($id)
    {
        $orders = Buyer::find($id);
        return view('buyers.edit', compact('buyers'));
    }


    public function update(Request $request, $id)
    {
        $buyers = Buyer::find($id);
        $validated =$request->validate([
            'first' => 'required',
            'last' => 'required',
            'email' => 'required',
            'phone' => 'required',
        ]);

        $buyers->fill([
            'first' => $request->first,
            'last' => $request->last,
            'email' => $request->email,
            'phone' => $request->phone,
        ]);

        $buyers->save();
        return view('buyers.show',compact('buyers'));
    }

    public function destroy($id)
    {
        $buyers = Buyer::find($id);
        $buyers->delete();
        return redirect('/users');
    }
}


