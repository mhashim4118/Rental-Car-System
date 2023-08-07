<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\VehicleDetail;
use Illuminate\Support\Facades\View;

class VehicleDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $vehiclesDetails = VehicleDetail::all();

        return view('vehicles_details.index', compact('vehicleDetails'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('profile.addv');
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
    public function show(VehicleDetail $vehicleDetail)
    {
        //
        $vehiclesDetail = VehicleDetail::all();
        // $vehicleDetail = VehicleDetail::select('vehicles_details.id as vehicle_id', 'vehicles_details.model', 'vehicles_details.description', 'vehicles_details.price', 'vehicles_details.image', 'vehicles_owner.name', 'vehicles_owner.phone', 'vehicles_owner.email', 'vehicles_owner.city')
        //     ->leftJoin('vehicles_owner', 'vehicles_details.vehicles_owner_id', '=', 'vehicles_owner.id')
        //     ->get();
        // dd($vehicleDetail);
        // return view('profile.vehiclescrud', ['vehicledetail' => $vehicleDetail]);
        return view('profile.vehiclescrud', compact('vehicleDetail'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    // public function edit()
    // {
    //    return view('profile.vehicle_edit');
    // }
    public function edit($id)
    {
        $vehicledetail = VehicleDetail::findOrFail($id);
        // dd($vehicledetail);
        return view('profile.vehicle_edit', compact('vehicledetail'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $vehicledetail = VehicleDetail::findOrFail($id);

        $vehicledetail->model = $request->input('model');
        $vehicledetail->price = $request->input('price');
        $vehicledetail->save();
        return redirect('vehiclesdetails');
        // return view('profile.vehiclescrud');
        // return redirect()->route('vehicles_details.index')->with('success', 'Vehicle Detail updated successfully');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $vehicleDetail = VehicleDetail::findOrFail($id);
        $vehicleDetail->delete();

        return view('profile.vehiclescrud');
    }

    public function filter(Request $request)
    {
        @dd('Hello from controller');
        $model = $request->input('model');

        // Get all vehicles that match the make
        $results = VehicleDetail::where('model', $model)->get();

        return response()->json($results);
    }
}
