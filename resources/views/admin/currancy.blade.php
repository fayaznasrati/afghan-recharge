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

            <!-- column -->
            <div class="col-sm-12">
              <div class="card">
                <div class="card-body">
                  <form action="{{route('currancy.store')}}" method="POST" enctype="multipart/form-data" class="form form-material ">
                      @csrf
                        <div class="row">
                            <div class="col-md-2">
                                <div class="form-group">
                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <input type="text"  name="currancyType" placeholder="Type Currancy Name"class="form-control ps-0 form-control-line">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- <div class="col-md-2">
                                <div class="form-group">
                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <select name="currancyType" class="form-select shadow-none border-0 ps-0 form-control-line">
                                                <option selected>Select Currancy</option>
                                                <option value="Dollar">Dollar</option>
                                                <option value="Euro">Euro</option>
                                                <option value="Lira">Lira</option>
                                                <option value="Iranian Rial">Iranian Rial</option>
                                            </select>
                                         </div>
                                    </div>
                                </div>
                            </div> --}}
                            <div class="col-md-2">
                                <div class="form-group">
                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <input type="text"  name="currancy" placeholder="Currancy"class="form-control ps-0 form-control-line">
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
                                            <input type="text" name="afghani" placeholder="Afghani"class="form-control ps-0 form-control-line">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <button type="submit" class="btn btn-info mx-auto mx-md-0 text-white">Create Currancy</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                        </div>
                        @if (count($currancy)>0)
                        <div class="table-responsive">
                          <table class="table user-table no-wrap">
                            <thead>

                              <tr>
                                <th class="border-top-0">#</th>
                                <th class="border-top-0">Currancy</th>
                                <th class="border-top-0">Equal to</th>
                                <th class="border-top-0">Afghani</th>

                                <th class="border-top-0">Action</th>


                              </tr>
                            </thead>
                            <tbody>
                              <?php $i=1?>
                              @foreach ($currancy as $cur)
                              <tr>
                                <td>{{$i++}}</td>
                                <td>{{$cur->currancy}}:{{$cur->currancyType}}</td>
                                <td>==</td>
                                <td>{{$cur->afghani}}: Afghani</td>
                                <td>
                                    <form action="{{ route('currancy.destroy',$cur->id) }}" method="Post">
                                        <a class="btn btn-primary" href="{{ route('currancy.edit',$cur->id) }}"><i class="fas fa-pencil-alt"></i></a>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger"  style="color:#ffffff"><i class="fas fa-trash-alt"></i> </button>
                                    </form>
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
    </div>

{{-- {{ $bundles}} --}}
@endsection
