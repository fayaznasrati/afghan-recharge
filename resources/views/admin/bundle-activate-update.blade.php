
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
              <h3 class="page-title mb-0 p-0">Update State of Bundle</h3>
              <div class="d-flex align-items-center">
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/admin/dashboard">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">
                     Update Status
                    </li>
                  </ol>
                </nav>
              </div>
            </div>

          </div>
        </div>
        <div class="container-fluid">
          <div class="row">

            <!-- column -->
            <div class="col-sm-12">
              <div class="card">
                <div class="card-body">

                    <div class="modal-body">

                            <form action="{{ route('bundle-request-update.update',$bundles->id) }}" method="POST" enctype="multipart/form-data" class="form form-material ">
                                @csrf
                                @method('PUT')
                            <div class="row">
                                <div class="col-md-4">
                               <table>
                                <input type="text"name="bundle_id" value="{{$bundles->bundle_id}}" hidden>
                                <input type="text"name="phone" value="{{$bundles->phone}}" hidden>
                                <input type="text"name="email"value="{{$bundles->email}}" hidden>
                                <input type="text"name="price"value="{{$bundles->price}}" hidden>
                                <input type="text"name="sender_phone"value="{{$bundles->sender_phone}}" hidden>
                                <input type="text"name="created_at"value="{{$bundles->created_at}}" hidden>
                                <tr><th>package Name</th><td>{{$bundles->bundle->pakName_en}}</td></tr>
                                <tr><th>phone</th><td>{{$bundles->phone}}</td></tr>
                                <tr><th>Email</th><td>{{$bundles->email}}</td></tr>
                                <tr><th>price</th><td>{{$bundles->price}}</td></tr>
                                <tr><th>Sender phone</th><td>{{$bundles->sender_phone}}</td></tr>
                                <tr><th>Requested At</th><td>{{$bundles->created_at}}</td></tr>
                               </table>
                                </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                <div class=" border-bottom">
                                    <select name="status" class="form-select shadow-none border-0 ps-0 form-control-line">
                                        <option selected>Select Status</option>
                                        <option  @if($bundles->status =='1')selected @endif value="1">Activated</option>
                                        <option  @if($bundles->status =='0')selected @endif value="0">Pindinding</option>
                                        <option  @if($bundles->status =='2')selected @endif value="2">Canceld</option>
                                    </select>
                                </div>
                            </div>
                        </div>


                    </div>

                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success" >Update</button>
                      <a href="/admin/bundle-activation" class="btn btn-danger">Cancel</a>
                      </div>

                  </div>

                </div>
              </div>
              <div class="d-felx justify-content-center">
                {{-- {!! $bundles->links('pagination::bootstrap-4') !!} --}}
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
{{-- ======================Create Bundle Modal=================================== --}}



  @endsection

