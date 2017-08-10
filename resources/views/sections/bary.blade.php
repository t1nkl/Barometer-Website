<!-- Бары -->
<div class="section row" id="section3">
	<div class="col-md-12 starter-section bars-bl">
		<div class="col-md-6 bars-heading-block">
			@if($locale == 'ru')
				<img src="/img/headers/bar.svg" class="img-headers" alt="">
			@else
				<img src="/img/headers/en/bars.svg" class="img-headers" alt="">
			@endif
			<p class="starter-heading-description">{{$settings->bars_content}}</p>
		</div>

		<div class="col-md-6 join">
			<button class="button-starter-bary md-trigger" data-modal="modal-become-member">@lang('static.body.take_part')</button>
		</div>
	</div>
	<div class="col-md-12 speakers-items">

		<bars></bars>

		<a href="#" class="buybuttonMain md-trigger" data-modal="modal-buy-ticket">
			<!-- <div class="circle-pop"></div> -->
			<span class="bilettext">@lang('static.header.buy_ticket')</span>
		</a>
	</div>
</div>
