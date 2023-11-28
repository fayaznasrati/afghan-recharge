
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
              <h3 class="page-title mb-0 p-0">New Contact Messages</h3>
              <div class="d-flex align-items-center">
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/admin/dashboard">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">
                      Customer Message Management
                    </li>
                  </ol>
                </nav>
              </div>
            </div>
            <div class="col-md-6 col-4 align-self-center">
              <div class="text-end upgrade-btn">
                <a href="/admin/contact"
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

                    <form action="{{route('messageFilter')}}" method="GET" enctype="multipart/form-data" class="form form-material ">
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
                                        <option value="1">Answerd</option>
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
                  @if (count($messages)>0)
                  <div class="table-responsive">
                    <table class="table user-table no-wrap">
                      <thead>
                        <tr>
                          <th class="border-top-0">#</th>
                          <th class="border-top-0">Name</th>
                          <th class="border-top-0">Email</th>
                          <th class="border-top-0">Phone</th>
                          <th class="border-top-0">Title</th>
                          <th class="border-top-0">Message</th>
                          <th class="border-top-0">Message Time</th>
                          <th class="border-top-0">Status</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>

                        <?php $i=1?>
                        @foreach ($messages as $message)
                        <tr>
                          <td>{{$i++}}</td>
                          <td>{{$message->name}}</td>
                          <td>{{$message->email}}</td>
                          <td>{{$message->phone}}</td>
                          <td>{{$message->title}}</td>
                          <td > <small>{{$message->body}}</small></td>
                          <td>{{$message->created_at}}</td>
                          <td>@if($message->status == '1') <b style="color:green">Answerd</b> @else <b style="color:yellow">Pinding</b> @endif</td>
                          <td>

                            <form action="{{ route('contact.destroy',$message->id) }}" method="Post">
                                {{-- <a class="btn btn-primary" href="{{ route('contact.edit',$message->id) }}"><i class="fas fa-pencil-alt"></i></a> --}}
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

{{-- {{ $bundles}} --}}
@endsection
