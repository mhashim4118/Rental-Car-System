<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\UserDetail;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $userDetail = Booking::with(['user','detail'])->get();
        dd($userDetail->toArray());
        // return view('user-details', compact('userDetail'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Booking $booking)  
    {
        // dd('hello');
        $booking = Booking::with(['user','detail'])->get();
        // dd($booking->toArray());
        return view('profile.booking-details', compact('booking'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $usersdetail = Booking::findOrFail($id);
        // dd($usersdetail);
        return view('profile.booking-detailsstatus', compact('usersdetail'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $usersdetail = Booking::findOrFail($id);
        $usersdetail->status = $request->input('status');
        // if ($request->input('status') == 'Approved') {
        //     // $mailData = [
        //     //     'to_email' => $request->input('email'),
        //     // ];
        //     // Mail::to($request->input('email'))->send(new ApprovalMail($mailData));
        // }

        $usersdetail->save();
        return view('profile.booking-details');
        // return redirect()->route('vehicles_details.index')->with('success', 'Vehicle Detail updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
