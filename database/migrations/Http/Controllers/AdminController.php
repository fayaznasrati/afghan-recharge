<?php

namespace App\Http\Controllers;

use App\Models\Bundle;
use App\Models\BundleActivation;
use App\Models\TopUp;
use Carbon\Carbon;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

use Illuminate\Pagination\LengthAwarePaginator;

class AdminController extends Controller
{

        /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $todayRequests = BundleActivation::Where('status', '0')
        ->whereRaw('Date(created_at) = CURDATE()')->get();

        $allRequests = BundleActivation::Where('status', '1')->get();

        $todayRecharges = TopUp::Where('status', '0')
        ->whereRaw('Date(created_at) = CURDATE()')->get();

        $allRecharges = TopUp::Where('status', '1')->get();

        $weeklyRecharges = TopUp::where('status', '1')->whereBetween('created_at',
        [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])->get();

        $monthlyRecharges = TopUp::where('status', '1')->whereBetween('created_at',
        [Carbon::now()->startOfMonth(), Carbon::now()->endOfMonth()])->get();

        return view('admin/index')
        ->with('todayRequests',$todayRequests)
        ->with('allRequests',$allRequests)
        ->with('weeklyRecharges',$weeklyRecharges)
        ->with('monthlyRecharges',$monthlyRecharges)
        ->with('allRecharges',$allRecharges)
        ->with('todayRecharges',$todayRecharges);
    }

    public function bundleList(){
        $bundles = Bundle::paginate(10);
        // return $bundles;
        return view('admin/bundle-list')->with('bundles',$bundles);

    }


    public function bundleFilter(Request $request){
        $operator = $request->operator;
        $bundleType = $request->bundleType;
        $bundles = Bundle::Where('operator', $operator)->where('bundleType', $bundleType)->paginate(50);
        return view('admin/bundle-list')->with('bundles',$bundles);
    }





    public function bundleActive(){
        // $bundles  = Bundle::find(10)->bundleactivation()->get();
        $requests = BundleActivation::orderBy('id', 'desc')->limit(10)->get();
        return view('admin/active-request')
        ->with('requests',$requests);
        // ->with( 'bundles', $bundles);

    }

    public function bundleReport(){
        $requests = BundleActivation::orderBy('id', 'desc')->limit(10)->get();
        return view('admin/bundle-report')
        ->with('requests',$requests);
    }
    public function bundleReportFilter(Request $request){
        $phone = $request->phone;
        $email = $request->email;
        $created_at = $request->created_at;
        $requests = BundleActivation::Where('phone', $phone)
        ->orwhere('email', $email)
        ->orwhere('created_at', $created_at)->paginate(50);
        return view('admin/bundle-report')->with('requests',$requests);
    }

    public function rechargeReport(){
        $topups = TopUp::orderBy('id', 'desc')->limit(10)->get();
        // return $topups;
        return view('admin/recharge-report')
        ->with('topups',$topups);
    }

    public function currancy(){
        $requests = BundleActivation::inRandomOrder()->orderBy('id', 'desc')->limit(10)->get();
        return view('admin/currancy')
        ->with('requests',$requests);
    }

    public function edit($id)
    {
        $bundles = BundleActivation::find($id);
        return view('admin/bundle-activate-update')->with('bundles',$bundles);

    }
    public function update(Request $request, $id)
    {
        // return $request;
        $newRequest = BundleActivation::find($id);
        $newRequest->status = $request->input('status');
        $newRequest->update();
        Alert::success('Success', 'Request Status Updated Successfully.');
        return redirect()->route('bundleActive')->with('success','Request has been Updated successfully.');
    }

    public function topUpFilter(Request $request){
        // return $request;
        $phone = $request->phone;
        $email = $request->email;
        $status = $request->status;
        $created_at = $request->created_at;
        $requests = TopUp::Where('phone', $phone)
        ->orwhere('email', $email)
        ->orwhere('status', $status)
        ->orwhere('created_at', $created_at)->paginate(50);
        // dd($requests);
        return view('admin/active-request')->with('requests',$requests);
    }

    public function login(){
        return 'login';

    }
}
