<!-- Партнеры -->
<div class="section row speakers-section" id="section6">
	<div class="col-md-12 starter-section">
		<div class="col-md-12">
			@if($locale == 'ru')
				<img src="/img/headers/partn_new.svg" class="img-headers" alt="">
			@else
				<img src="/img/headers/en/partn_new.svg" class="img-headers" alt="">
			@endif
		</div>
		@foreach ($mainpartners as $mainpartner)
		<div class="col-md-3 partners-block">
			<div class="partners-logo"><img src="{{$mainpartner->image}}" class="img-fluid" alt=""></div>
			<h4>{{$mainpartner->title}}</h4>
			<p class="partners-txt" >{{$mainpartner->content}}</p>
		</div>
		@endforeach
	</div>
	<a href="#" class="buybuttonMain md-trigger" data-modal="modal-buy-ticket">
		<span class="bilettext">@lang('static.header.buy_ticket')</span>
	</a>
</div>

<!-- Partners -->
<div class="section row speakers-section" id="section7">
	<div class="col-md-12 starter-section fatBlock">
		<div class="col-md-12 ">
			@if($locale == 'ru')
				<img src="/img/headers/partn.png" class="img-headers" alt="">
			@else
				<img src="/img/headers/en/partners.png" class="img-headers" alt="">
			@endif
			<div class="partners-all">
				<partners></partners>
			</div>
		</div>
		<a href="#" class="buybuttonMain md-trigger partnersButton" data-modal="modal-buy-ticket">
			<span class="bilettext">@lang('static.header.buy_ticket')</span>
		</a>
	</div>
</div>
