
@extends('layouts.app_admin')
@section('content')


<div class="page-wrapper">
    <div class="page-breadcrumb">
        <div class="row align-items-center">
            <div class="col-md-6 col-8 align-self-center">
                <h3 class="page-title mb-0 p-0">Dashboard</h3>
                <div class="d-flex align-items-center">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">

            <!-- Column -->
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title" > <a href="/admin/bundle-activation">e-Bundle Pending Requests</a></h4>
                        <div class="text-end">
                            <h2 class="font-light mb-0"><i class="ti-arrow-up text-success"></i> {{count($todayRequests)}}</h2>
                            <span class="text-muted">Todays Income Requests</span>
                        </div>
                        <span class="text-success"></span>
                        <div class="progress">
                            <div class="progress-bar bg-success" role="progressbar"
                                style="width: 100%; height: 6px;" aria-valuenow="25" aria-valuemin="0"
                                aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Today's Recharges</h4>
                        <div class="text-end">
                            <h2 class="font-light mb-0"><i class="ti-arrow-up text-success"></i>{{count($todayRecharges)}}</h2>
                            <span class="text-muted">Successful Rechareges</span>
                        </div>
                        <span class="text-success"></span>
                        <div class="progress">
                            <div class="progress-bar bg-success" role="progressbar"
                                style="width: 100%; height: 6px;" aria-valuenow="25" aria-valuemin="0"
                                aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Column -->
            <!-- Column -->
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Weekly Rechareges</h4>
                        <div class="text-end">
                            <h2 class="font-light mb-0"><i class="ti-arrow-up text-info"></i>{{count($weeklyRecharges)}}</h2>
                            <span class="text-muted">Successful Rechareges</span>
                        </div>
                        <span class="text-info"></span>
                        <div class="progress">
                            <div class="progress-bar bg-info" role="progressbar"
                                style="width: 100%; height: 6px;" aria-valuenow="25" aria-valuemin="0"
                                aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-4">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">All Requested Bundles</h4>
                        <div class="text-end">
                            <h2 class="font-light mb-0"><i class="ti-arrow-up text-info"></i>{{count($allRequests)}}</h2>
                            <span class="text-muted">Successful Activated Bundles</span>
                        </div>
                        <span class="text-info"></span>
                        <div class="progress">
                            <div class="progress-bar bg-info" role="progressbar"
                                style="width: 100%; height: 6px;" aria-valuenow="25" aria-valuemin="0"
                                aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
            </div>
    <!-- Column -->
    <div class="col-sm-4">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Monthly Rechareges</h4>
                <div class="text-end">
                    <h2 class="font-light mb-0"><i class="ti-arrow-up text-info"></i>{{count($monthlyRecharges)}}</h2>
                    <span class="text-muted">Successful Monthly Rechareges</span>
                </div>
                <span class="text-info"></span>
                <div class="progress">
                    <div class="progress-bar bg-info" role="progressbar"
                        style="width: 100%; height: 6px;" aria-valuenow="25" aria-valuemin="0"
                        aria-valuemax="100"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">All Rechareges</h4>
                <div class="text-end">
                    <h2 class="font-light mb-0"><i class="ti-arrow-up text-info"></i>{{count($allRecharges)}}</h2>
                    <span class="text-muted">Successful Recharges</span>
                </div>
                <span class="text-info"></span>
                <div class="progress">
                    <div class="progress-bar bg-info" role="progressbar"
                        style="width: 100%; height: 6px;" aria-valuenow="25" aria-valuemin="0"
                        aria-valuemax="100"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title" ><a href="/admin/contact">Contact Messages</a></h4>
                <div class="text-end">
                    <h2 class="font-light mb-0"><i class="ti-arrow-up text-info"></i>{{count($newMessages)}}</h2>
                    <span class="text-muted">Resived Messages </span>
                </div>
                <span class="text-info"></span>
                <div class="progress">
                    <div class="progress-bar bg-info" role="progressbar"
                        style="width: 100%; height: 6px;" aria-valuenow="25" aria-valuemin="0"
                        aria-valuemax="100"></div>
                </div>
            </div>
        </div>
    </div>
            <!-- Column -->
        </div>
        </div>
</div>



@endsection
