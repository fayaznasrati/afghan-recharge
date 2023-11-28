@extends('layouts.app_admin')
@section('content')

<div class="container">

    <form action="{{route('ebundle.store')}}" method="POST" enctype="multipart/form-data" class="form form-material ">
        @csrf
          <div class="row">
            <div class="col-md-4"></div>

            <div class="col-md-2">
                  <div class="form-group">
                      <div class="form-group">
                          <div class="col-md-12">
                              <input type="text"  name="operator" placeholder="op"class="form-control ps-0 form-control-line">
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-md-2">
                  <div class="form-group">
                      <div class="form-group">
                          <div class="col-md-12">
                              <input type="text" name="bundleType" placeholder="bundle"class="form-control ps-0 form-control-line">
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-md-2">
                  <div class="form-group">
                      <div class="form-group">
                          <div class="col-md-12">
                              <input type="text" name="price" placeholder="price"class="form-control ps-0 form-control-line">
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-md-2">
                  <div class="form-group">
                      <div class="form-group">
                          <div class="col-md-12">
                              <button type="submit" class="btn btn-info mx-auto mx-md-0 text-white">Create Currancy</button>
                          </div></form>
                      </div>
                  </div>

              </div>


</div>

<div class="row">
    <div class="col-md-4"></div>
        <div class="col-md-4">
        <button
        class="btn btn-success d-none d-md-inline-block text-white"
        data-bs-toggle="modal" data-bs-target="#myModal">
         Bundle</button>
    </div>
    <div class="col-md-4"></div>

</div>
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

                <form action="{{route('ebundle.store')}}" method="POST" enctype="multipart/form-data" class="form form-material ">
                    @csrf
                      <div class="row">

                        <div class="col-md-2">
                              <div class="form-group">
                                  <div class="form-group">
                                      <div class="col-md-12">
                                          <input type="text"  name="operator" placeholder="op"class="form-control ps-0 form-control-line">
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="col-md-2">
                              <div class="form-group">
                                  <div class="form-group">
                                      <div class="col-md-12">
                                          <input type="text" name="bundleType" placeholder="bundle"class="form-control ps-0 form-control-line">
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="col-md-2">
                            <div class="form-group">
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <input type="text" name="pakName_en" placeholder="price"class="form-control ps-0 form-control-line">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <input type="text" name="pakName_ps" placeholder="price"class="form-control ps-0 form-control-line">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <input type="text" name="pakName_fa" placeholder="price"class="form-control ps-0 form-control-line">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <input type="text" name="quota" placeholder="price"class="form-control ps-0 form-control-line">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <input type="text" name="price" placeholder="price"class="form-control ps-0 form-control-line">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <input type="text" name="code" placeholder="price"class="form-control ps-0 form-control-line">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <input type="text" name="pakDetails_en" placeholder="price"class="form-control ps-0 form-control-line">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <input type="text" name="pakDetails_ps" placeholder="price"class="form-control ps-0 form-control-line">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <input type="text" name="pakDetails_fa" placeholder="price"class="form-control ps-0 form-control-line">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <input type="text" name="status" placeholder="1"class="form-control ps-0 form-control-line">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <input type="text" name="validity" placeholder="price"class="form-control ps-0 form-control-line">
                                    </div>
                                </div>
                            </div>
                        </div>


                          <div class="col-md-2">
                              <div class="form-group">
                                  <div class="form-group">
                                      <div class="col-md-12">
                                          <button type="submit" class="btn btn-info mx-auto mx-md-0 text-white">Create</button>
                                      </div></form>
                                  </div>
                              </div>
                          </div>

    </div>
  </div>


    @endsection
