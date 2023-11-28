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
              <h3 class="page-title mb-0 p-0">Bundles Management</h3>
              <div class="d-flex align-items-center">
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/admin/dashboard">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">
                     Edit Bundles
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
                        <form action="{{ route('bundles.update',$bundle->id) }}" method="POST" enctype="multipart/form-data" class="form form-material ">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <div class=" border-bottom">
                                            <select name="operator" class="form-select shadow-none border-0 ps-0 form-control-line">
                                                <option selected>Select Operator</option>
                                                <option @if($bundle->operator =='awcc')selected @endif value="awcc">AWCC</option>
                                                <option @if($bundle->operator =='mtn')selected @endif value="mtn">MTN</option>
                                                <option @if($bundle->operator =='roshan')selected @endif value="roshan">Roshan</option>
                                                <option @if($bundle->operator =='etisalat')selected @endif value="etisalat">Etisalat</option>
                                                <option @if($bundle->operator =='salaam')selected @endif value="salaam">Salaam</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                    <div class=" border-bottom">
                                        <select name="bundleType" class="form-select shadow-none border-0 ps-0 form-control-line">
                                            <option selected>Select Type</option>
                                            <option @if($bundle->bundleType =='data')selected @endif value="data">Data</option>
                                            <option @if($bundle->bundleType =='voice')selected @endif value="voice">Voice</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <input type="text" placeholder="Package Name" class="form-control ps-0 form-control-line" value="{{$bundle->pakName_en}}" name="pakName_en" >
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <input type="text" placeholder="اسم بسته" class="form-control ps-0 form-control-line"value="{{$bundle->pakName_fa}}"  name="pakName_fa" >
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <input type="text" placeholder="کحوری نوم" class="form-control ps-0 form-control-line"value="{{$bundle->pakName_ps}}"  name="pakName_ps" >
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <input type="text" placeholder="Price Ex: 100 AFG" class="form-control ps-0 form-control-line"value="{{$bundle->price}}"  name="price" >
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <input type="text" placeholder="Quotation Ex: 10 GB" class="form-control ps-0 form-control-line"value="{{$bundle->quota}}"  name="quota" >
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <textarea rows="3" name="pakDetails_en" class="form-control ps-0 form-control-line" placeholder="Package Details">{{$bundle->pakDetails_en}}</textarea>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <textarea name="pakDetails_fa" rows="3" class="form-control ps-0 form-control-line"  placeholder="جزئیات بیشتر بسته">{{$bundle->pakDetails_fa}}</textarea>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <textarea rows="3" name="pakDetails_ps" class="form-control ps-0 form-control-line"  placeholder="نور بسته توضیحات">{{$bundle->pakDetails_ps}}</textarea>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <input type="text" placeholder="Code Ex: *123*1#" class="form-control ps-0 form-control-line"value="{{$bundle->code}}"  name="code" >
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <input type="text" placeholder="Validity Ex: 30 Days" class="form-control ps-0 form-control-line"value="{{$bundle->validity}}"  name="validity" >
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                <div class=" border-bottom">
                                    <select name="status" class="form-select shadow-none border-0 ps-0 form-control-line">
                                        <option selected>Select Status</option>
                                        <option  @if($bundle->status =='1')selected @endif value="1">Active</option>
                                        <option  @if($bundle->status =='0')selected @endif value="0">In-Active</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                    </div>

                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <button type="reset" class="btn btn-warning" >Clear</button>
                        <button type="submit" class="btn btn-success" >Update</button>

                      <a href="/admin/bundle-list" class="btn btn-danger">Cancel</a>
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
