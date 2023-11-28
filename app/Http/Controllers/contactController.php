<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class contactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $messages = Contact::orderBy('id', 'desc')->limit(10)->get();
        return view('admin.contact')
        ->with('messages',$messages);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'title' => 'required',
            'body' => 'required',
        ]);
    Contact::create($request->all());
    Alert::success('Success', 'We just recived your message, we would be back to you ASAP.');

    return redirect()->route('index')->with('success','bundle has been created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function messageFilter(Request $request)
    {
        // return $request;
        $phone = $request->phone;
        $email = $request->email;
        $status = $request->status;
        $created_at = $request->created_at;
        $messages = Contact::Where('email', $email)->orwhere('phone', $phone)->orwhere('status', $status)->get();
        return view('admin.contact')->with('messages',$messages);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Contact $contact)
    {
        return view('admin.contact-edit')
        ->with('contact', $contact);
        // return $contact;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Contact $contact)
    {

         $contact->fill($request->post())->save();
         Alert::success('Success', ' contact Updated Successfully.');

        return redirect()->route('contact.index');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contact $contact)
    {
        $contact->delete();
        Alert::success('Success', 'Message Deleted Successfully.');
        return redirect()->route('contact.index');
    }
}
