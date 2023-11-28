@extends('app')
@section('content')


	<!-- Start Home Area -->
    <div style="text-align: {{Session::get('lang') == 'en'? 'left':'right'}}; direction:{{Session::get('lang') == 'en'? 'ltr':'rtl'}}">

	<div class="home-area">
		<div class="d-table">
			<div class="d-table-cell">
				<div class="container">
					<div class="row align-items-center">
						<div class="col-lg-8 col-md-12">
							<div class="main-banner-content">
								<h1>{{ __('lang.e-Recharge Online with') }} <span class="color-text">{{ __('lang.Afghan Recharge') }}</span></h1>
								<h5>{{ __('lang.slong') }}</h5>
							</div>
						</div>
						<div class="col-lg-4 col-md-12">
							<div class="banner-image">
								<img src="assets/img/home-font.png" alt="Afghan Recharge Banner">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="grey-cr"></div>
	</div>
	<!-- End Home Area -->
{{-- {{$currancy}} --}}
	<!-- Start Overview Section -->
	<div class="contact-section section-padding">
		<div class="container">

			<div class="contact-information-box-3">
				<div class="row">
                    <div class="col-md-3"></div>

                        @csrf
                        <div class="col-md-6 col-sm-12 col-lg-6">
                    <form id="MoneyFilterForm" action="{{route('moneyFilter')}}" method="GET" enctype="multipart/form-data">

                        <select id="filterMoney" name="filterMoney" class="selectpicker form-control">
                            <option value>{{ __('lang.forgin to Afgh') }}</option>
                            @foreach($currancy as $cur)
                            <option value="{{$cur->id}}">Note:{{$cur->currancy}}{{$cur->currancyType}} = {{$cur->afghani}} Afghani</option>
                            @endforeach
                        </select>
                </form>

                    </div>
                    <div class="col-md-3"></div>
				</div>
				<br>
				<hr>
				<div class="row">

					<div class="col-lg-6 col-md-12 contact-form-3" >

                            <form action="{{ route('topup.recharge') }}" method="POST" enctype="multipart/form-data">
                                @csrf
							<div class="row">
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
                <div class="col-lg-6 col-md-12 contact-form-3">
							<div class="row">
								<fieldset>
                                    @foreach($moneys as $money)
									<div class="form-check" style="padding-bottom: 10px;">
										<input  value="{{$money->amount}}" required checked class="form-check-input" name="amount" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
										<input type="hidden" name="currancyType" value="{{$money->currancy->currancyType}}">
                                        <label style="padding: 0px 30px 0px 15px;" class="form-check-label" for="flexRadioDefault1">
										  {{$money->amount}}  {{$money->currancy->currancyType}}
										</label>
									  </div>
                                    @endforeach

									  <div class="notBoot"
                                      style="width:300px; height:70px; background-color:lightgray; padding:20px">
										  Google reCaptcha v2
                                        {{-- {!! htmlFormSnippet() !!}
                                        @if($errors->has('g-recaptcha-response'))
                                        <div>
                                            <small class="text-danger">{{ $errors->first('g-recaptcha-response') }}</small>
                                        </div>
                                        @endif --}}
									  </div><br>
									<div class="col-lg-12 col-md-12">
										<button type="submit"  id="submitBtn" onclick="checkFields()" class="default-btn btn-sm">{{__('lang.Process')}}</button>
										<button type="reset" class="clear-btn">{{__('lang.Clear')}} <span></span></button>
									</div>
								</fieldset>
							</div>
						</form>
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
    <script>
        const filterMoney  = document.getElementById('filterMoney');
        filterMoney.addEventListener('change', function() {
            document.getElementById('MoneyFilterForm').submit();
            // alert('Money Filter');
        });
    </script>
	<!-- End Partner Logo Section -->
	@endsection



