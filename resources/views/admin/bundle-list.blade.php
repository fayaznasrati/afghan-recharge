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
                      Bundles Management
                    </li>
                  </ol>
                </nav>
              </div>
            </div>
            <div class="col-md-6 col-4 align-self-center">
              <div class="text-end upgrade-btn">
                <button
                  class="btn btn-success d-none d-md-inline-block text-white"
                  data-bs-toggle="modal" data-bs-target="#myModal">
                  Create Bundle</button>

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


                        <form action="/admin/bundleFilter" method="GET" enctype="multipart/form-data" class="form form-material ">
                            @csrf
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">

                                    <div class=" border-bottom">
                                        <select name="operator" class="form-select shadow-none border-0 ps-0 form-control-line">
                                            <option selected>Select Operator</option>
                                            <option value="awcc">AWCC</option>
                                            <option value="mtn">MTN</option>
                                            <option value="roshan">Roshan</option>
                                            <option value="etisalat">Etisalat</option>
                                            <option value="salaam">Salaam</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                   <div class="form-group">

                                <div class=" border-bottom">
                                    <select name="bundleType" class="form-select shadow-none border-0 ps-0 form-control-line">
                                        <option selected>Select Type</option>
                                        <option value="data">Data</option>
                                        <option value="voice">Voice</option>
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
                    </form>
                        <div class="col-md-2">
                            <div class="form-group">
                                <div class="d-flex">
                                    <a href="/admin/bundle-list" class="btn btn-warning mx-auto mx-md-0 text-white">Reload</a>
                                </div>
                            </div>
                        </div>
                        </div>
                    <hr>
                  @if (count($bundles)>0)
                  <div class="table-responsive">
                    <table class="table user-table no-wrap">
                      <thead>

                        <tr>
                          <th class="border-top-0">#</th>
                          <th class="border-top-0">Operator</th>
                          <th class="border-top-0">Type</th>
                          <th class="border-top-0">Pak Name</th>
                          <th class="border-top-0">کحوری نوم </th>
                          <th class="border-top-0">اسم بسته</th>
                          <th class="border-top-0">Price</th>
                          <th class="border-top-0">Quotation</th>
                          <th class="border-top-0">Code</th>
                          <th class="border-top-0">Detatils</th>
                          <th class="border-top-0">جزیات</th>
                          <th class="border-top-0">جزیات</th>
                          <th class="border-top-0">Status</th>
                          <th class="border-top-0">Validity</th>
                          <th class="border-top-0">Actions</th>

                        </tr>
                      </thead>
                      <tbody>
                        <?php $i=1?>
                        @foreach ($bundles as $bundle)
                        <tr>
                          <td>{{$i++}}</td>
                          <td>{{$bundle->operator}}</td>
                          <td>{{$bundle->bundleType}}</td>
                          <td>{{$bundle->pakName_en}}</td>
                          <td>{{$bundle->pakName_ps}}</td>
                          <td>{{$bundle->pakName_fa}}</td>
                          <td>{{$bundle->price}}</td>
                          <td>{{$bundle->quota}}</td>
                          <td>{{$bundle->code}}</td>
                          <td>{{$bundle->pakDetails_en}}</td>
                          <td>{{$bundle->pakDetails_ps}}</td>
                          <td>{{$bundle->pakDetails_fa}}</td>
                          <td><?= $bundle->status == 1? '<b style="color:green">Active</b>': '<b style="color:red">In-Active</b>'?></td>
                          <td>{{$bundle->validity}}</td>
                          <td>
                            <form action="{{ route('bundles.destroy',$bundle->id) }}" method="Post">
                                <a class="btn btn-primary" href="{{ route('bundles.edit',$bundle->id) }}"  ><i class="fas fa-pencil-alt"></i></a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" style="color:#ffffff"><i  class="fas fa-trash-alt"></i> </button>
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
              <div class="d-felx justify-content-center">
                {{-- {!! $bundles->links('pagination::bootstrap-4') !!} --}}
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
{{-- ======================Create Bundle Modal=================================== --}}
<!-- Modal -->
<!-- The Modal -->
<!-- The Modal -->
<div class="modal fade" id="myModal">
    <div class="modal-dialog ">
      <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Modal Heading</h4>
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>

        <!-- Modal body -->
        <div class="modal-body">
            <form action="{{route('bundles.store')}}" method="POST" enctype="multipart/form-data" class="form form-material ">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <div class=" border-bottom">
                                <select name="operator" class="form-select shadow-none border-0 ps-0 form-control-line">
                                    <option selected>Select Operator</option>
                                    <option value="awcc">AWCC</option>
                                    <option value="mtn">MTN</option>
                                    <option value="roshan">Roshan</option>
                                    <option value="etisalat">Etisalat</option>
                                    <option value="salaam">Salaam</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                        <div class=" border-bottom">
                            <select name="bundleType" class="form-select shadow-none border-0 ps-0 form-control-line">
                                <option selected>Select Type</option>
                                <option value="data">Data</option>
                                <option value="voice">Voice</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <input type="text" placeholder="Package Name" class="form-control ps-0 form-control-line" name="pakName_en" >
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <input type="text" placeholder="اسم بسته" class="form-control ps-0 form-control-line" name="pakName_fa" >
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <input type="text" placeholder="کحوری نوم" class="form-control ps-0 form-control-line" name="pakName_ps" >
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <input type="text" placeholder="Price Ex: 100 AFG" class="form-control ps-0 form-control-line" name="price" >
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <input type="text" placeholder="Quotation Ex: 10 GB" class="form-control ps-0 form-control-line" name="quota" >
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <input type="text" placeholder="Code Ex: *123*1#" class="form-control ps-0 form-control-line" name="code" >
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <textarea rows="3" name="pakDetails_en" class="form-control ps-0 form-control-line" placeholder="Package Details"></textarea>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <textarea name="pakDetails_fa" rows="3" class="form-control ps-0 form-control-line" placeholder="جزئیات بیشتر بسته"></textarea>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <textarea rows="3" name="pakDetails_ps" class="form-control ps-0 form-control-line" placeholder="نور بسته توضیحات"></textarea>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <input type="text" placeholder="Validity Ex: 30 Days" class="form-control ps-0 form-control-line" name="validity" >
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                    <div class=" border-bottom">
                        <select name="status" class="form-select shadow-none border-0 ps-0 form-control-line">
                            <option selected>Select Status</option>
                            <option value="1">Active</option>
                            <option value="0">In-Active</option>
                        </select>
                    </div>
                </div>
            </div>

        </div>

        <!-- Modal footer -->
        <div class="modal-footer">
            <button type="reset" class="btn btn-warning" >Clear</button>
            <button type="submit" class="btn btn-success" >Create</button>

            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
          </div>

      </div>
      <form>
    </div>
  </div>


  @endsection
