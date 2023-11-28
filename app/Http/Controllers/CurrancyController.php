<?php

namespace App\Http\Controllers;

use App\Models\Currancy;
use Illuminate\Http\Request;

class CurrancyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return 'curancy';
        $currancy = Currancy::orderBy('id', 'desc')->limit(10)->get();
        return view('admin.currancy')->with('currancy',$currancy);
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
        $request->validate([
            'afghani' => 'required',
            'currancyType' => 'required',
            'currancy' => 'required',
        ]);

        Currancy::create($request->all());

        return redirect()->route('currancy.index')->with('success','currancy has been created successfully.');
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

    public function edit( Currancy $currancy)
    {
        return view('admin.currancy-edit')
        ->with('currancy', $currancy);
        // return $currancy;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Currancy $currancy)
    {

        $request->validate([
            'afghani' => 'required',
            'currancyType' => 'required',
            'currancy' => 'required',
        ]);

         $currancy->fill($request->post())->save();

        return redirect()->route('currancy.index')->with('success','currancy has been Updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Currancy $currancy)
    {
        $currancy->delete();
        return redirect()->route('currancy.index')->with('success','currancy has been deleted successfully');
    }
}
