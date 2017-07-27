<!-- О локации -->
<div class="section row speakers-section" id="section5">
	<div class="col-md-12 starter-section about-location">
		<div class="col-md-6">
			@if($locale == 'ru')
				<img src="/img/headers/loc.svg" class="img-headers" alt="">
			@else
				<img src="/img/headers/en/location.svg" class="img-headers" alt="">
			@endif
			<p class="starter-heading-description">{{$settings->location_content}}</p>
		</div>
		<div class="col-md-6 locallity">
			<a href="{{$settings->location_url}}" class="button-starter-map">@lang('static.body.map')</a>
		</div>
		<div class="col-md-6 contact-info">
			<div class="contact-bl">
				<div class="icongrafic">
					<img src="/img/location_on-loc.svg" class="img-fluid" alt="">
				</div>
				<div class="contact-txt">
					<p class="location">{{$settings->place}}, {{$settings->address}}</p>
				</div>
			</div>
			<div class="contact-bl">
				<div class="icongrafic">
					<img src="/img/envelope-loc.svg" class="img-fluid" alt="">
				</div>
				<div class="contact-txt">
					<p class="location"><a class="location" href="mailto:{{$settings->email}}">{{$settings->email}}</a></p>
				</div>
			</div>
			<div class="contact-bl">
				<div class="icongrafic">
					<img src="/img/phone-loc.svg" class="img-fluid" alt="">
				</div>
				<div class="contact-txt">
					<p class="location"><a class="location" href="tel:{{$settings->phone}}"> {{$settings->phone}}</a></p>
				</div>
			</div>
		</div>
		<div class="col-md-6 contact-illustration">
			<img src="{{$settings->location_image}}" class="img-fluid" alt="">
		</div>
	</div>
	<a href="#" class="buybutton md-trigger" data-modal="modal-buy-ticket">
		<div class="circle-pop"></div>
		<span class="bilettext">@lang('static.header.buy_ticket')</span>
	</a>
</div>
