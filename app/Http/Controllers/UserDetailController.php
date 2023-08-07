<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Mail\DemoMail;
use App\Models\Booking;
use App\Jobs\emailsending;
use App\Mail\ApprovalMail;
use App\Models\UserDetail;
use Illuminate\Http\Request;
use App\Models\BookingDetail;
use Illuminate\Support\Facades\DB;
use Stripe\Exception\CardException;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\View;
use Illuminate\Auth\Events\Registered;

// @dd('hello');
class UserDetailController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $userDetails = BookingDetail::all();

        return view('user_details.index', compact('userDetails'));
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
        //getting id from users table
        $userid = User::select('id')->where('email', $request->email)->value('id');
        if($userid>0){
        $userdetailid = BookingDetail::select('id')->where('email', $request->email)->value('id');
        if($userdetailid>0){
            $userDetail = new BookingDetail;
            //booking-table
        $booking = new Booking;
        $booking->user_id = $userid;
        $booking->model = $request->model;
        $booking->choice = $request->choice;
        $booking->location_from = $request->location_from;
        $booking->location_to = $request->location_to;
        $booking->date_from = $request->time_from;
        $booking->date_to = $request->time_to;
        $booking->payment = $request->payment;
        $booking->payment_status = 'Unpaid';
        $booking->save();
        $lastid = $userDetail->id;
        if ($request->payment == 'cash') {
            // find a way to get the lateest inserted record id with eloquent

            Booking::where('id', $lastid)
                ->update(['payment_status' => 'Unpaid']);
            return view('welcome');
        }
        }
        else{
        //users-details-table
        $userDetail = new BookingDetail;
        $userDetail->user_id = $userid;
        $userDetail->name = $request->name;
        $userDetail->phone = $request->phone;
        $userDetail->email = $request->email;
        $userDetail->save();

        //booking-table
        $booking = new Booking;
        $booking->user_id = $userid;
        $booking->model = $request->model;
        $booking->choice = $request->choice;
        $booking->location_from = $request->location_from;
        $booking->location_to = $request->location_to;
        $booking->date_from = $request->time_from;
        $booking->date_to = $request->time_to;
        $booking->payment = $request->payment;
        $booking->payment_status = 'Unpaid';
        $booking->save();
        $lastid = $userDetail->id;
        if ($request->payment == 'cash') {
            // find a way to get the lateest inserted record id with eloquent

            Booking::where('id', $lastid)
                ->update(['payment_status' => 'Unpaid']);
            return view('welcome');
        }
    } //end of nested-if
    } // end of if($userid>0s)
    else{
        //user-create code
        $u_id= User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => 'password',
        ])->assignRole('customer');

        //users-details-table
        $userDetail = new BookingDetail;
        $userDetail->user_id = $u_id->id;
        $userDetail->name = $request->name;
        $userDetail->phone = $request->phone;
        $userDetail->email = $request->email;
        $userDetail->save();

        //booking-table
        $booking = new Booking;
        $booking->user_id = $u_id->id;
        $booking->model = $request->model;
        $booking->choice = $request->choice;
        $booking->location_from = $request->location_from;
        $booking->location_to = $request->location_to;
        $booking->date_from = $request->time_from;
        $booking->date_to = $request->time_to;
        $booking->payment = $request->payment;
        $booking->payment_status = 'Unpaid';
        $booking->save();
        $lastid = $u_id->id;
        if ($request->payment == 'cash') {
            // find a way to get the lateest inserted record id with eloquent

            Booking::where('id', $lastid)
                ->update(['payment_status' => 'Unpaid']);
            return view('welcome');
        }
    }
        //  else {
        //     // Stripe payment code here
        //     $userDetail = new UserDetail;
        //     $userDetail->name = $request->name;
        //     $userDetail->phone = $request->phone;
        //     $userDetail->email = $request->email;
        //     $userDetail->model = $request->model;
        //     $userDetail->choice = $request->choice;
        //     $userDetail->location_from = $request->location_from;
        //     $userDetail->location_to = $request->location_to;
        //     $userDetail->date_from = $request->time_from;
        //     $userDetail->date_to = $request->time_to;
        //     $userDetail->payment = $request->payment;
        //     $userDetail->payment_status = $request->payment_status;
        //     $userDetail->save();
        //     $lastid = $userDetail->id;

        //     if ($request->payment == 'online') {
        //         \Stripe\Stripe::setApiKey('sk_test_51N1VoKGjCr6DSBLmA55J9qRIGEiW7sNJQw2Qr1EIgcX6owI0KNhKAmwoQJUU9Z8STmED3vENemZ4zBSuBQnzgrWd006nWjKgvm');
        //         $charge = \Stripe\Charge::create([
        //             'source' => $_POST['stripeToken'],
        //             'description' => "Comfortable trip and the user is:" . $request->email,
        //             'amount' => 10000,
        //             'currency' => 'usd',
        //         ]);
 
        //         if ($charge->status == 'succeeded') {
        //             Booking::where('id', $lastid)
        //                 ->update(['payment_status' => 'Paid']);
        //             $mailData = [
        //                 'to_email' => $request->email,
        //             ];

        //             dispatch(new emailsending($mailData));

        //             // Mail::to($request->email)->send(new DemoMail($mailData));


        //             return View::make('welcome');
        //         } else {
        //             return response()->json(['success' => false]);
        //         }
        //     } else {
        //         UserDetail::where('id', $lastid)
        //             ->update(['payment_status' => 'Cash']);

        //         return View::make('welcome');
        //     }
        // }
    }

    /**
     * Display the specified resource.
     */
    public function show(BookingDetail $userDetail)
    {


        $userDetail = BookingDetail::all();
        return view('profile.udetails', compact('userDetail'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $usersdetail = BookingDetail::findOrFail($id);
        return view('profile.users_edit', compact('usersdetail'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $usersdetail = BookingDetail::findOrFail($id);

        $usersdetail->name = $request->input('name');
        $usersdetail->phone = $request->input('phone');
        $usersdetail->email = $request->input('email');
        $usersdetail->status = $request->input('status');
        if ($request->input('status') == 'Approved') {
            $mailData = [
                'to_email' => $request->input('email'),
            ];
            Mail::to($request->input('email'))->send(new ApprovalMail($mailData));
        }

        $usersdetail->save();
        return view('profile.udetails');
        // return redirect()->route('vehicles_details.index')->with('success', 'Vehicle Detail updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(BookingDetail $userDetail)
    {
        //
        $userDetail->delete();
    }
}
