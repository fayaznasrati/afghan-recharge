<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Currancy;
use App\Models\Money;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class userViewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $currancy = Currancy::get();
        $moneys = Money::where('currancy_id',3 )->get();
        return view('index')
        ->with('moneys',$moneys)
        ->with('currancy',$currancy);

    }

    public function moneyFilter(Request $request){
        $currancy_id = $request->filterMoney;
        $moneys = Money::where('currancy_id', $currancy_id)->get();
        $currancy = Currancy::get();

        return view('index')
        ->with('moneys',$moneys)
        ->with('currancy',$currancy);
    }
    public function aboutus()
    {
        return view('aboutus');
    }

    public function contactus()
    {
        return view('contact');
    }

    public function faq()
    {
        return view('faq');
    }

    public function returnPolicy()
    {
        return view('return-policy');
    }

    public function privacyPolicy()
    {
        return view('privacy-policy');
    }

    public function testimonials()
    {
        return view('testimonials');
    }
    /**
     *
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }
    public function sendMessage(Request $request)
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

    return redirect()->back();
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
