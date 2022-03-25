<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Manufacturer;


class ManufacturerController extends Controller
{

    public function index()
    {
        $manufacturers = Manufacturers::all();
        return view('manufacturers', compact('manufacturers'));
    }


    public function create()
    {
        return view('manufacturers.create');
    }


    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'sales' => 'required',
            'tech' => 'required',
       ]);

       $manufacturers = Manufacturer::create([
        'name' => $request->name,
        'sales' => $request->sales,
        'tech' => $request->tech,
        
       ]);

       return view('manufacturers.show', compact('manufacturers'));
    }


    public function show($id)
    {
        $manufacturers = Manufacturer::find($id);
        return view('manufacturers.show', compact('manufacturers'));
    }


    public function edit($id)
    {
        $manufacturers = Manufacturer::find($id);
        return view('manufacturers.edit', compact('manufacturers'));
    }


    public function update(Request $request, $id)
    {
        $manufacturers = Manufacturer::find($id);
        $validated =$request->validate([
            'name' => 'required',
            'sales' => 'required',
            'tech' => 'required',

        ]);

        $manufacturers->fill([
        'name' => $request->name,
        'sales' => $request->sales,
        'tech' => $request->tech,
    ]);
        $manufacturers->save();
        return view('manufacturers.show',compact('manufacturers'));
    }






    public function destroy($id)
    {
        $manufacturers = Manufacturer::find($id);
        $manufacturers ->delete();
        return redirect('/manufacturers');
    }
}

