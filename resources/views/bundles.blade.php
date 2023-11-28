
@extends('app')
@section('content')


	<!-- Start Page Title Area -->
	<div class="page-title-area item-bg1">
		<div class="d-table">
			<div class="d-table-cell">
				<div class="container">
					<div class="page-title-content">
						<h2>{{__('lang.bundle pak')}}</h2>
					</div>
				</div>
			</div>
		</div>
	</div>
    <br><br><br>
	<!-- End Page Title Area -->


<div class="container">

    <form action="/filter" method="GET" enctype="multipart/form-data">
        @csrf
        <div class="form-row" style="direction:{{Session::get('lang')=='en'? 'ltr':'rtl'}}">
          <div class="form-group col-md-4">
            {{-- <label for="operator">{{__('lang.Select Operator')}}</label> --}}
            <select  id="operator" name="operator" class="form-control">
              <option selected>{{__('lang.Select Operator')}}</option>
              <option value="awcc">AWCC</option>
              <option value="mtn">MTN</option>
              <option value="etisalat">Etisalat</option>
              <option value="roshan">Roshan</option>
              <option value="salaam">Salaam</option>
            </select>
          </div>
          <div class="form-group col-md-4">
            {{-- <label for="bundleType">{{__('lang.Select Type')}}</label> --}}
            <select name="bundleType" class="form-control">
              <option selected>{{__('lang.Select Type')}}</option>
              <option value="data" >Data</option>
              <option value="voice" >Voice</option>
            </select>
          </div>
          <div class="form-group col-md-3">
            {{-- <label for="search">{{__('lang.Search')}}</label> --}}
            <button type="submit" id="submitBtn" onclick="checkFields()"
            class="form-control search-btn ">{{__('lang.Search')}}</button>
          </div>
      </form>
</div>
     @if (count($bundles)>0)
     <div class="container" style="overflow-x:auto;
     direction:{{Session::get('lang')=='en'? 'ltr':'rtl'}}">
        <hr>
        <table id="customers">
            <tr>
            <th>{{__('lang.Package Name')}}</th>
            <th>{{__('lang.Type')}}</th>
            <th>{{__('lang.Operator')}}</th>
            <th>{{__('lang.Quotation')}}</th>
            <th>{{__('lang.Price')}}</th>
            <th>{{__('lang.Validity')}}</th>
            <th>{{__('lang.Details')}}</th>
            <th>{{__('lang.Action')}}</th>
            </tr>
            @foreach ($bundles as $bundle)
            <tr>
            <td>@if(Session::get('lang')=="en")
                {{$bundle->pakName_en}}
                @elseif(Session::get('lang')=="ps")
                {{$bundle->pakName_ps}}
                @else {{$bundle->pakName_fa}}
                 @endif
            </td>
            <td>{{$bundle->operator}}</td>
            <td>{{$bundle->bundleType}}</td>
            <td>{{$bundle->quota}}</td>
            <td>{{$bundle->price}}</td>
            <td>{{$bundle->validity}}</td>
            <td>@if(Session::get('lang')=="en")
                {{$bundle->pakDetails_en}}
                @elseif(Session::get('lang')=="ps")
                {{$bundle->pakDetails_ps}}
                @else {{$bundle->pakDetails_fa}}
                 @endif
            </td>
            <td><a href="/package/{{$bundle->id}}">
            <button class="activate-btn nav-btn-1">
            {{__('lang.Activate')}}
            </button>
            </a>
            </td>
            </tr>
            @endforeach
        </table>

    </div>
     @else
     <center><b>{{__('lang.No Data Found')}}</b></center>
     @endif

    </div><br><br><br>


    <!-- The Modal -->
@endsection
