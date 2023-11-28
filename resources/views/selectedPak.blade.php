
@extends('app')
@section('content')


	<!-- Start Overview Section -->
	<div class="contact-section section-padding" style="direction:{{Session::get('lang')=='en'? 'ltr' : 'rtl'}};
    text-align:{{Session::get('lang')=='en'? 'left' : 'right'}}">
		<div class="container"> <br><br><br>

			<div class="contact-information-box-3">
				<div class="col-lg-12">
                    {{-- {{$currancy->afghani}} --}}
					<center><b  style="color:#1c4b82">{{ __('lang.recharge amount') }} </b></center>
				</div>
				<br>
				<hr>
				<div class="row">


					<div class="col-lg-6 col-md-12 contact-form-3" >

                            <form action="{{ route('topup.bundle') }}" method="POST" enctype="multipart/form-data">
                                @csrf
							<div class="row">
                                <input type="text" name="bundle_id" value="{{$bundleDetails->id}}" hidden>
                                <input type="text" name="price" value="{{$bundleDetails->price}}" hidden>
                                <span id="wrong_phone"></span>
								<div class="col-lg-10 col-md-12">
									<div class="form-group">
										<input name="phone" style="text-align: {{Session::get('lang') == 'en'? 'left':'right'}}" type="text" id="phone" class="form-control" required
											placeholder="{{__('lang.phone number')}}">
									</div>
								</div>
								<div class="col-lg-10 col-md-12">
									<div class="form-group">
										<input onkeyup="validate_phone()" name="conPhone" style="text-align: {{Session::get('lang') == 'en'? 'left':'right'}}" type="text"  id="conPhone" class="form-control" required
											placeholder="{{__('lang.confirm phone number')}}">
									</div>
								</div>

								<div class="col-lg-10 col-md-12">
									<div class="form-group">
										<input name="email" style="text-align: {{Session::get('lang') == 'en'? 'left':'right'}}" type="email" id="email"  class="form-control"
											 placeholder="{{__('lang.email')}} ({{__('lang.optional')}})">
									</div>
								</div>
								<div class="col-lg-10 col-md-12">
									<div class="form-group">
										<input name="sender_phone" style="text-align: {{Session::get('lang') == 'en'? 'left':'right'}}" type="text" name="senderPhone"  class="form-control"
											placeholder="{{__('lang.sender phone number')}} ({{__('lang.optional')}})">
									</div>
								</div>
							</div>
					</div>
                 <div class="col-lg-6 col-md-12 contact-form-3" >
							<div class="row">
								<fieldset>
									<table >

												<tr>
													<th>{{__('lang.Package Name')}}</th>
													<th></th>
													<td>@if(Session::get('lang')=="en")
														{{$bundleDetails->pakName_en}}
														@elseif(Session::get('lang')=="ps")
														{{$bundleDetails->pakName_ps}}
														@else {{$bundleDetails->pakName_fa}}
														@endif
													</td>
												</tr>
												<tr>
													<th>{{__('lang.Type')}}</th>
													<th></th>
													<td>{{$bundleDetails->bundleType}}</td>
												</tr>
												<tr>
													<th>{{__('lang.Price')}}</th>
													<th></th>
													<td>{{$bundleDetails->price}}</td>
												</tr>
												<tr>
													<th>{{__('lang.Quotation')}}</th>
													<th></th>
													<td>{{$bundleDetails->quota}}</td>
												</tr>
												<tr>
													<th>{{__('lang.Details')}}</th>
													<th></th>
													<td>@if(Session::get('lang')=="en")
														{{$bundleDetails->pakDetails_en}}
														@elseif(Session::get('lang')=="ps")
														{{$bundleDetails->pakDetails_ps}}
														@else {{$bundleDetails->pakDetails_fa}}
														@endif
													</td>
												</tr>
									</table>
                                    <br><br><br> <br>
									<div class="col-lg-12 col-md-12">
										<button type="submit"  id="submitBtn" onclick="checkFields()" class="default-btn btn-sm">{{__('lang.Process')}} </button>
									   <button type="reset" class="clear-btn">{{__('lang.Clear')}}</button>
                                    </form>
                                       <a href="/"><button  class="cancel-btn btn-sm">{{__('lang.Cancel')}}</button></a>
									</div>

								</fieldset>
							</div>

					</div>
				</div>
				<div class="col-lg-12"><br><br>
					<center>
						<h4  style="color:#1c4b82">{{ __('lang.importent notice') }}</h4>
                        <p>{{ __('lang.gov tax policy') }} </p>
					</center>
				</div>
			</div>
		</div>
	</div>
	<!-- End Overview Section -->
	<!-- Start Partner Logo Section -->
	<div class="partner-area bg-grey">
		<div class="container">
			<div id="partner-carousel" class="partner-carousel owl-carousel owl-theme owl-loaded">
				<div class="partner-slide-item">
					<a href="#0">
						<img src="{{URL::asset('assets/img/partner-logo/client-1.jpg')}}" alt="MTN">
					</a>
				</div>
				<div class="partner-slide-item">
					<a href="#0">
						<img src="{{URL::asset('assets/img/partner-logo/client-2.jpg')}}" alt="AWCC">
					</a>
				</div>
				<div class="partner-slide-item">
					<a href="#0">
						<img src="{{URL::asset('assets/img/partner-logo/client-3.jpg')}}" alt="Roshan">
					</a>
				</div>
				<div class="partner-slide-item">
					<a href="#0">
						<img src="{{URL::asset('assets/img/partner-logo/client-4.jpg')}}" alt="Etisalat">
					</a>
				</div>
				<div class="partner-slide-item">
					<a href="#0">
						<img src="{{URL::asset('assets/img/partner-logo/client-5.jpg')}}" alt="Salaam">
					</a>
				</div>
			</div>
		</div>
	</div>
	<!-- End Partner Logo Section -->
	@endsection

