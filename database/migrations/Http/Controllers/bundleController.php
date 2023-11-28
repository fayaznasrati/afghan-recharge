<?php

namespace App\Http\Controllers;

use App\Models\Bundle;
use App\Models\Currancy;
use App\Models\Money;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class bundleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function pakages()
     {
         $bundles = Bundle::inRandomOrder()->orderBy('id', 'desc')->limit(10)->get();
         return view('/bundles')->with('bundles',$bundles);
     }

    public function index()
    {
        $bundles = Bundle::inRandomOrder()->orderBy('id', 'desc')->limit(10)->get();
        return view('/admin/bundle-list')->with('bundles',$bundles);
    }

    public function filter(Request $request){
        $operator = $request->operator;
        $bundleType = $request->bundleType;


        $bundles = Bundle::Where('operator', $operator)->where('bundleType', $bundleType)->get();
        return view('/bundles')->with('bundles',$bundles);
        // return  $bundles->all();

    }

    public function selectPak($id){
        $bundleDetails = Bundle::Where('id', $id)->first();
        $currancy = Currancy::where('currancy_id',3 )->get();

        return view('/selectedPak')->with('bundleDetails',$bundleDetails)   ->with('currancy',$currancy);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    //    return $request;
    $request->validate([
        'operator' => 'required',
        'bundleType' => 'required',
        'pakName_en' => 'required',
        'pakName_ps' => 'required',
        'pakName_fa' => 'required',
        'price' => 'required',
        'quota' => 'required',
        'code' => 'required',
        'pakDetails_en' => 'required',
        'pakDetails_ps' => 'required',
        'pakDetails_fa' => 'required',
        'status' => 'required',
        'validity' => 'required',
    ]);

    Bundle::create($request->all());
    Alert::success('Success', 'New Bundle Created Successfully.');

    return redirect()->route('bundles.index')->with('success','bundle has been created successfully.');
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Bundle $bundle)
    {
        $request->validate([
            'operator' => 'required',
            'bundleType' => 'required',
            'pakName_en' => 'required',
            'pakName_ps' => 'required',
            'pakName_fa' => 'required',
            'price' => 'required',
            'quota' => 'required',
            'code' => 'required',
            'pakDetails_en' => 'required',
            'pakDetails_ps' => 'required',
            'pakDetails_fa' => 'required',
            'status' => 'required',
            'validity' => 'required',
        ]);

         $bundle->fill($request->post())->save();
         Alert::success('Success', ' Bundle Updated Successfully.');

        return redirect()->route('bundles.index')->with('success','bundle has been Updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bundle $bundle)
    {
        $bundle->delete();
        Alert::success('Success', 'New Bundle Deleted Successfully.');

        return redirect()->route('bundles.index')->with('success','Bundle has been deleted successfully');
    }

        /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TopUp  $TopUp
     * @return \Illuminate\Http\Response
     */
    public function edit(Bundle $bundle)
    {

        return view('admin.bundle-edit',compact('bundle'));
    }
}
