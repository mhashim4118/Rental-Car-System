<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $allSessions = session()->all();
        dd($allSessions);
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
        // $input = $request->accept('_token')->all();
        // try {
        //     Contact::create($input);
        //     return view('welcome')->with('Contact created successfully');
        // } catch (\Throwable $th) {
        //     return view('welcome')->withError('Failed to create contact');
        // }
        
        $contactdata = new Contact();
        $contactdata->name = $request->name;
        $contactdata->email = $request->email;
        $contactdata->subject = $request->subject;
        $contactdata->message = $request->message;
        $contactdata->save();
        return View::make('welcome');
    }

    /**
     * Display the specified resource.
     */
    public function show(Contact $contact)
    {
        //
        $message = Contact::all();
        return view('profile.usersmessages',compact('message'));
        // return view('profile.usersmessages',compact(['message' => Contact::all()]));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Contact $contact)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Contact $contact)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Contact $contact)
    {
        //
    }
}
