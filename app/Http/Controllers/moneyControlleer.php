<?php

namespace App\Http\Controllers;

use App\Models\Currancy;
use App\Models\Money;
use Illuminate\Http\Request;

class moneyControlleer extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $currancy = Currancy::get();
        $moneys = Money::orderBy('id', 'desc')->limit(10)->get();
        return view('admin.money')
        ->with('moneys',$moneys)
        ->with('currancy',$currancy);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request;
        $request->validate([
            'amount' => 'required',
            'currancy_id' => 'required',

        ]);

        Money::create($request->all());

        return redirect()->route('money.index')
        ->with('success','Money has been created successfully.');
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
    public function edit(Money $money)
    {
        $currancy = Currancy::get();
        return view('admin.money-edit')
        ->with('currancy', $currancy)
        ->with('money', $money);
        // return $money;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Money $money)
    {
        $request->validate([
            'amount' => 'required',
            'currancy_id' => 'required',
        ]);
         $money->fill($request->post())->save();
        return redirect()->route('money.index')->with('success','Money has been Updated successfully.');
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
