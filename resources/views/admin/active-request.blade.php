
@extends('layouts.app_admin')
@section('content')


      <!-- Page wrapper  -->
      <!-- ============================================================== -->
      <div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="page-breadcrumb">
          <div class="row align-items-center">
            <div class="col-md-6 col-8 align-self-center">
              <h3 class="page-title mb-0 p-0">New Bundle Requests</h3>
              <div class="d-flex align-items-center">
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/admin/dashboard">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">
                      Bundles Requests Management
                    </li>
                  </ol>
                </nav>
              </div>
            </div>
            <div class="col-md-6 col-4 align-self-center">
              <div class="text-end upgrade-btn">
                <a href="/admin/bundle-activation"
                  class="btn btn-success d-none d-md-inline-block text-white">Reload</a>

              </div>
            </div>
          </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Container fluid  -->
        <!-- ============================================================== -->
        <div class="container-fluid">
          <!-- ============================================================== -->
          <!-- Start Page Content -->
          <!-- ============================================================== -->
          <div class="row">

            <!-- column -->
            <div class="col-sm-12">
              <div class="card">
                <div class="card-body">



                    <form action="{{route('topUpFilter')}}" method="GET" enctype="multipart/form-data" class="form form-material ">
                        @csrf
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <div class=" border-bottom">
                                    <input type="text" placeholder="phone"
                                    class="form-control ps-0 form-control-line" name="phone"
                                    id="phone">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <div class=" border-bottom">
                                    <input type="email" placeholder="Email"
                                    class="form-control ps-0 form-control-line" name="email"
                                    id="email">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <div class=" border-bottom">
                                    <input type="date" placeholder="Request Date"
                                    class="form-control ps-0 form-control-line" name="created_at"
                                    id="created_at">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <div class=" border-bottom">
                                    <select name="status" class="form-select shadow-none border-0 ps-0 form-control-line">
                                        <option value="0">Pinding</option>
                                        <option value="1">Activated</option>
                                        <option value="2">canceled</option>

                                    </select>
                                </div>
                            </div>
                        </div>


                        <div class="col-md-2">
                            <div class="form-group">
                                <div class="d-flex">
                                    <button class="btn btn-info mx-auto mx-md-0 text-white">Filter</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form><hr>
                  @if (count($requests)>0)
                  <div class="table-responsive">
                    <table class="table user-table no-wrap">
                      <thead>

                        <tr>
                          <th class="border-top-0">#</th>
                          <th class="border-top-0">Operator</th>
                          <th class="border-top-0">Type</th>
                          <th class="border-top-0">Pak Name</th>
                          <th class="border-top-0">Price</th>
                          <th class="border-top-0">Reciver Phone</th>
                          <th class="border-top-0">Email</th>
                          <th class="border-top-0">Sender Phone</th>
                          <th class="border-top-0">Request Time</th>
                          <th class="border-top-0">Status</th>
                          <th>Action</th>

                        </tr>
                      </thead>
                      <tbody>

                        <?php $i=1?>
                        @foreach ($requests as $request)
                        <tr>
                          <td>{{$i++}}</td>
                          <td>{{$request->bundle->operator}}</td>
                          <td>{{$request->bundle->bundleType}}</td>
                          <td>{{$request->bundle->pakName_en}}</td>
                          <td>{{$request->price}}</td>
                          <td>{{$request->phone}}</td>
                          <td>{{$request->email}}</td>
                          <td>{{$request->sender_phone}}</td>
                          <td>{{$request->created_at}}</td>
                          <td>@if($request->status == '1') <b style="color:green">Activated</b> @elseif($request->status == '2') <b style="color:red">Canceled</b> @else <b style="color:yellow">Pinding</b> @endif</td>
                          {{-- <td>{{ if($request->status == 1) {''}
                          elseif ($request->status == 2) {'<span style="color:red">Canceled</span>'}
                          else {'<span style="color:yellow">Pending</span>'} }}</td> --}}
                          <td>
                            <a class="btn btn-primary" href="{{ route('bundle-request-update.edit',$request->id) }}"  ><i class="fas fa-pencil-alt"></i></a>
                        </td>
                        </tr>
                            @endforeach

                      </tbody>
                    </table>
                  </div>
                  @else
                  <center><b>{{__('lang.No Data Found')}}</b></center>
                  @endif
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

{{-- {{ $bundles}} --}}
@endsection
