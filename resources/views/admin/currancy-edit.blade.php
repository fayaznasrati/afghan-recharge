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
              <h3 class="page-title mb-0 p-0">Currancy</h3>
              <div class="d-flex align-items-center">
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/admin/dashboard">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">
                     Currancy Management
                    </li>
                  </ol>
                </nav>
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
            {{-- <h1>{{$currancy->id}}</h1> --}}
            <!-- column  -->
            <div class="col-sm-12">
              <div class="card">
                <div class="card-body">
                  <form action="{{ route('currancy.update',$currancy->id) }}" method="POST" enctype="multipart/form-data" class="form form-material ">
                    @csrf
                    @method('PUT')
                        <div class="row">
                            <div class="col-md-2">
                                <div class="form-group">
                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <input type="text"  value="{{$currancy->currancyType}}" name="currancyType" placeholder="Select Currancy Type"class="form-control ps-0 form-control-line">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- <div class="col-md-2">
                                <div class="form-group">
                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <select  name="currancyType" class="form-select shadow-none border-0 ps-0 form-control-line">
                                                <option selected>Select Currancy</option>
                                                <option @if($currancy->currancyType =='Dollar')selected @endif value="Dollar">Dollar</option>
                                                <option @if($currancy->currancyType =='Euro')selected @endif value="Euro">Euro</option>
                                                <option @if($currancy->currancyType =='Lira')selected @endif value="Lira">Lira</option>
                                                <option  @if($currancy->currancyType =='Iranian Rial')selected @endif value="Iranian Rial">Iranian Rial</option>

                                            </select>
                                         </div>
                                    </div>
                                </div>
                            </div> --}}
                            <div class="col-md-2">
                                <div class="form-group">
                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <input type="text"  value="{{$currancy->currancy}}" name="currancy" placeholder="Currancy"class="form-control ps-0 form-control-line">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-1">
                                {{-- <div class="form-group"> --}}
                                  ===
                                {{-- </div> --}}
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <input type="text" name="afghani" value="{{$currancy->afghani}}" placeholder="Afghani"class="form-control ps-0 form-control-line">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <button type="submit" class="btn btn-info mx-auto mx-md-0 text-white">Update Currancy</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <a href="/admin/currancy"><button class="btn btn-warning mx-auto mx-md-0 text-white">Cancel</button></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                        </div>
                        </div>

                </div>

              </div>

            </div>
          </div>
        </div>
      </div>
    </div>

{{-- {{ $bundles}} --}}
@endsection
