<?php

namespace App\Http\Controllers;

use App\Models\Bundle;
use App\Models\BundleActivation;
use App\Models\TopUp;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use ReCaptcha\ReCaptcha;
use App\Rules\RecaptchaRule;
use anhskohbo\NoCaptcha\Facades\NoCaptcha;

class topUpController extends Controller
{
    public function __construct() {
        $this->middleware('auth', ['except' => [
            'recharge', 'index','bundleActivator'
        ]]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $activeBundles = BundleActivation::orderBy('id', 'desc')->get();
        return $activeBundles;
    }
    public function mybundle(Request $request)
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
            Bundle::create($request->all());
            Alert::success('Success', 'Bundle Activated successfully.');
            return redirect('/');
        }
 /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function activate($id)
    {
        return $id;
    }

    public function bundleActivator(Request $request)
    {
        $request->validate([
            'bundle_id' => 'required',
            'phone' => 'required|min:10|max:13',
        ]);
        if($request->phone ==  $request->conPhone ){

            BundleActivation::create($request->all());
            Alert::success('Success', 'Bundle Activated successfully.');
            return redirect('/');

        }else{
            Alert::warning("Wranning", "phone number not matches");
            return redirect('/');
        }
        // return $request;
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
    public function recharge(Request $request)
    {

        $validator = Validator::make($request->all(),[
            'amount' => 'required',
            'email' => 'required',
            'phone' => 'required|min:10|max:13',
            // 'g-recaptcha-response' => 'recaptcha',//recaptcha validation
            // 'g-recaptcha-response' => 'required|captcha',
            'g-recaptcha-response' => 'recaptcha',
            // 'g-recaptcha-response' => ['required', new RecaptchaRule],
        ]);

   
        if ($validator->fails()) {
            Alert::warning("warning", "warning capture");

            return redirect()->Back()->withInput()->withErrors($validator);
        }else{
            // Handle reCAPTCHA validation error
      
        //// remove this comment when website is live not on local server
        // if ($validator->fails()) {
        //     return redirect()->Back()->withInput()->withErrors($validator);
            if(  $request->phone ==  $request->conPhone ){
                TopUp::create($request->all());
                Alert::success('Success', 'phone number recharged successfully.');
                return redirect('/');

            }else{
                Alert::warning("Wranning", "phone number not matches");
                return redirect('/');
            }
        }
        //  }else{
        //    Alert::warning("sucesss", "phone number not matches");
        //  }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TopUp  $TopUp
     * @return \Illuminate\Http\Response
     */
    public function show(TopUp $TopUp)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TopUp  $TopUp
     * @return \Illuminate\Http\Response
     */
    public function edit(TopUp $TopUp)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TopUp  $TopUp
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TopUp $TopUp)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TopUp  $TopUp
     * @return \Illuminate\Http\Response
     */
    public function destroy(TopUp $TopUp)
    {
        //
    }


}
