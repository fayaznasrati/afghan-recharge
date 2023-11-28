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
              <h3 class="page-title mb-0 p-0">Recharge Report</h3>
              <div class="d-flex align-items-center">
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/admin/dashboard">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">
                      Recharge Report Management
                    </li>
                  </ol>
                </nav>
              </div>
            </div>
            <div class="col-md-6 col-4 align-self-center">
                <div class="text-end upgrade-btn">
                  <a href="/admin/recharge-report"
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
                            <div class="col-md-3">
                                <div class="form-group">
                                    <div class=" border-bottom">
                                        <input type="date" placeholder="Request Date"
                                        class="form-control ps-0 form-control-line" name="created_at"
                                        id="created_at">
                                    </div>
                                </div>
                            </div>


                            <div class="col-md-3">
                                <div class="form-group">
                                    <div class="d-flex">
                                        <button class="btn btn-info mx-auto mx-md-0 text-white">Filter</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form><hr>
                  @if (count($topups)>0)
                  <div class="table-responsive">
                    <table class="table user-table no-wrap">
                      <thead>

                        <tr>
                          <th class="border-top-0">#</th>
                          <th class="border-top-0">Price</th>
                          <th class="border-top-0">Phone</th>
                          <th class="border-top-0">Email</th>
                          <th class="border-top-0">Sender Phone</th>
                          <th class="border-top-0">Request Time</th>
                          <th class="border-top-0">Status</th>

                        </tr>
                      </thead>
                      <tbody>
                        <?php $i=1?>
                        @foreach ($topups as $topup)
                        <tr>
                          <td>{{$i++}}</td>
                          <td>{{$topup->amount}} {{$topup->currancyType}}</td>
                          <td>{{$topup->phone}}</td>
                          <td>@if($topup->email == null) Not Provided By User! @else{{$topup->email}}@endif</td>
                          <td>@if($topup->sender_phone == null) Not Provided By User! @else{{$topup->sender_phone}}@endif</td>
                          <td>{{$topup->created_at}}</td>
                          <td><?= $topup->status == 1? '<span style="color:green">Activated</span>': '<span style="color:red">Pinding</span>'?></td>
                          {{-- <td>
                            <a href="/bundles/{{$topup->id}}"><button class="btn btn-success"> <i class="fas fa-pencil-alt"></i> </button></a>
                            <a href="/bundles/{{$topup->id}}"><button class="btn btn-danger"> <i class="fas fa-trash-alt"></i> </button></a>

                        </td> --}}
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
