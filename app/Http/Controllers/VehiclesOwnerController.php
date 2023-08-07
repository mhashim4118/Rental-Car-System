<?php

namespace App\Http\Controllers;

// use App\Models\VehicleOwner;
use Illuminate\Http\Request;
use App\Models\VehicleDetail;
use Illuminate\Support\Facades\View;

class VehiclesOwnerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('profile.vehiclesowneradd');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $userid = auth()->user()->id;      
        $vehiclesDetail = new VehicleDetail();
        $vehiclesDetail->owner_id = $userid;
        $vehiclesDetail->model = $request->input('model');
        $vehiclesDetail->description = $request->input('description');
        $vehiclesDetail->plate_no = $request->input('plate_no');
        $vehiclesDetail->engine_capacity = $request->input('engine_capacity');
        $vehiclesDetail->year_of_manufacture = $request->input('year_of_manufacture');
        $vehiclesDetail->price = $request->input('price');
        $vehiclesDetail->image = $request->input('image');
        if ($request->hasFile('image')) {

            $vehiclesDetail['image'] = $request->file('image')
                ->store('logos', 'public');
        }
        $vehiclesDetail->save();
        return View::make('dashboard');

        
    }

    /**
     * Display the specified resource.
     */
    public function show(VehicleDetail $vehicleOwner)
    {
        $vehicleOwner = VehicleDetail::select('*')->where('owner_id','=',auth()->user()->id)->get();
        // dd($vehicleOwner);
        return view('profile.vehiclesownercrud', compact('vehicleOwner'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $vehicleOwner = VehicleDetail::findOrFail($id);
        return view('profile.vehiclesowneredit', compact('vehicleOwner'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $vehicleOwner = VehicleDetail::findOrFail($id);

        $vehicleOwner->model = $request->input('model');
        $vehicleOwner->plate_no = $request->input('plate_no');
        $vehicleOwner->engine_capacity = $request->input('engine_capacity');
        $vehicleOwner->year_of_manufacture = $request->input('year_of_manufacture');

        $vehicleOwner->save();
        return view('profile.vehiclesownercrud');
        // return redirect()->route('vehicles_details.index')->with('success', 'Vehicle Detail updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(VehicleDetail $vehicleOwner)
    {
        //
    }
}
