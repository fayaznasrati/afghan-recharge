<?php

namespace App\Http\Controllers;

use App\Models\Bundle;
use App\Models\BundleActivation;
use App\Models\Currancy;
use App\Models\Money;
use App\Models\TopUp;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;

class API_Controller extends Controller
{

    public function api_bundleList()
    {
        $bundles = Bundle::paginate(10);
        return  $bundles;
    }

    public function api_recharge(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'amount' => 'required',
            'email' => 'required',
            'phone' => 'required|min:10|max:13',
            'g-recaptcha-response' => 'recaptcha', //recaptcha validation
        ]);


        //// remove this comment when website is live not on local server
        // if ($validator->fails()) {
        //     return redirect()->Back()->withInput()->withErrors($validator);
        if ($request->phone ==  $request->conPhone) {
            TopUp::create($request->all());
            return response()->json(['Success' => 'Recharged successfully', 'status' => 200]);
        } else {
            return response()->json(['filed' => 'Phone number not Matching', 'status' => 400]);
        }
        //  }else{
        //    Alert::warning("sucesss", "phone number not matches");
        //  }

    }

    public function api_selectPak($id)
    {
        $bundleDetails = Bundle::Where('id', $id)->first();
        return $bundleDetails;
    }

    public function api_rechargeReport()
    {
        $topups = TopUp::orderBy('id', 'desc')->limit(10)->get();
        return response()->json($topups, 200);
    }
    public function api_bundleReport()
    {
        $requests = BundleActivation::orderBy('id', 'desc')->limit(10)->get();
        return  $requests;
    }

    public function api_filter(Request $request)
    {
        $operator = $request->operator;
        $bundleType = $request->bundleType;
        $bundles = Bundle::Where('operator', $operator)->where('bundleType', $bundleType)->get();
        return  $bundles;
    }

    public function api_pakages()
    {
        $bundles = Bundle::inRandomOrder()->orderBy('id', 'desc')->limit(10)->get();
        return $bundles;
    }

    public function api_bundleActivator(Request $request)
    {
        $request->validate([
            'bundle_id' => 'required',
            'phone' => 'required|min:10|max:13',
        ]);
        if ($request->phone ==  $request->conPhone) {
            BundleActivation::create($request->all());
            return response()->json(['success' => 'Bundle Activated successfully.', 'status' => 200]);
        } else {
            return response()->json(['filed' => 'Phone Number Does not match!.', 'status' => 400]);
        }
        // return $request;
    }

    public function api_store(Request $request)
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
        return response()->json(['success' => 'bundle creted successfully']);
    }

    public function api_money()
    {
        $moneys = Money::orderBy('id', 'desc')->limit(10)->get();
        return $moneys;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
