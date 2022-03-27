<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Manufacturer;
use App\Models\Hardware;


class ManufacturerController extends Controller
{

    public function index()
    {
        $manufacturers = Manufacturer::all();
        return view('manufacturers', compact('manufacturers'));
    }


    public function create()
    {
        $hardware = Hardware::all();
        return view('manufacturers.create', compact('hardware'));
    }


    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'sales' => 'required',
            'tech' => 'required',
            'hardware_id'=> 'required',
       ]);

       $manufacturers = Manufacturer::create([
        'name' => $request->name,
        'sales' => $request->sales,
        'tech' => $request->tech,
        'hardware_id' => $request->hardware_id,
       ]);

       return view('manufacturers.show', compact('manufacturers'));
    }


    public function show($id)
    {
        $hardware = Hardware::all();
        $manufacturers = Manufacturer::find($id);
        return view('manufacturers.show', compact('manufacturers', 'hardware'));
    }


    public function edit($id)
    {
        $manufacturers = Manufacturer::find($id);
        $hardware = Hardware::all();
        return view('manufacturers.edit', compact('manufacturers', 'hardware'));
    }


    public function update(Request $request, $id)
    {
        $manufacturers = Manufacturer::find($id);
        $validated =$request->validate([
            'name' => 'required',
            'sales' => 'required',
            'tech' => 'required',
            'hardware_id' => 'required',

        ]);

        $manufacturers->fill([
        'name' => $request->name,
        'sales' => $request->sales,
        'tech' => $request->tech,
        'hardware_id'=> $request->hardware_id,
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

