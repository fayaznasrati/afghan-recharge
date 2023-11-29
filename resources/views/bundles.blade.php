
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
          <div class="form-group col-md-4">
            {{-- <label for="search">{{__('lang.Search')}}</label> --}}
            <button type="submit" id="submitBtn" onclick="checkFields()"
            class="form-control search-btn ">{{__('lang.Search')}}</button>
          </div>
      </form>
</div>
     @if (count($bundles)>0)
     <div style="overflow-x:auto; direction:{{Session::get('lang')=='en'? 'ltr':'rtl'}}; text-align:{{Session::get('lang')=='en'? 'left':'right'}}">
        <hr>
        <table id="customers">
            <tr>
            <th>#No</th>
            <th style="width: 200px">{{__('lang.Package Name')}}</th>
            <th>{{__('lang.Operator')}}</th>
            <th>{{__('lang.Type')}}</th>
            <th>{{__('lang.Quotation')}}</th>
            <th>{{__('lang.Price')}}</th>
            <th>{{__('lang.Validity')}}</th>
            <th>{{__('lang.Details')}}</th>
            <th>{{__('lang.Action')}}</th>
            </tr>
            @php
                $i =1;
            @endphp
            @foreach ($bundles as $bundle)
            <tr>
              <td>{{$i++}}:</td>
            <td>@if(Session::get('lang')=="en")
                {{$bundle->pakName_en}}
                @elseif(Session::get('lang')=="ps")
                {{$bundle->pakName_ps}}
                @else {{$bundle->pakName_fa}}
                 @endif
            </td>
            @switch($bundle->operator)
            @case('mtn')
              <td>MTN (Afg)</td>
              @break
              @case('roshan')
              <td>Roshan</td>
              @break
              @case('etisalat')
              <td>Etisalat(Afg)</td>
              @break
              @case('salaam')
              <td>Salaam</td>
              @break
              @case('awcc')
              <td>AWCC</td>
              @break
          
            @default
              
          @endswitch
           
            <td>{{$bundle->bundleType}}</td>
            <td>{{$bundle->quota}}</td>
            <td>{{$bundle->price}}</td>
            <td>{{$bundle->validity}}</td>

            <td>
              @if(Session::get('lang')=="en")
              @if (strlen($bundle->pakDetails_en)>=40)
              <div class="Enhover-container">
                <span class="Enhover-trigger"> {{Str::limit($bundle->pakDetails_en,40)}}</span>
                <span class="Enhover-reveal"> {{$bundle->pakDetails_en}}</span>
               </div>
              @else
              {{$bundle->pakDetails_en}}
              @endif
           
                @elseif(Session::get('lang')=="ps")
                @if (strlen($bundle->pakDetails_ps)>=40)
                <div class="hover-container">
                  <span class="hover-trigger"> {{Str::limit($bundle->pakDetails_ps,40)}}</span>
                  <span class="hover-reveal"> {{$bundle->pakDetails_ps}}</span>
                 </div>
                 @else
                 {{$bundle->pakDetails_ps}}
                 @endif
                @else 
                @if (strlen($bundle->pakDetails_fa)>=40)
                <div class="hover-container">
                  <span class="hover-trigger"> {{Str::limit($bundle->pakDetails_fa,40)}}</span>
                  <span class="hover-reveal"> {{$bundle->pakDetails_fa}}</span>
                 </div>
                 @else
                 {{$bundle->pakDetails_fa}}
                 @endif
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

    </div>
    <br><br><br>
    <br><br><br>
    <br><br><br>
    <br><br><br>


    <!-- The Modal -->
@endsection
