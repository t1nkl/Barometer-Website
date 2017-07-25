<!-- Спикеры -->
<div class="section row speakers-section" id="section2">
		<div class="col-md-12 starter-section speakers">
			<div class="col-md-6 speakers-heading-block">
				@if($locale == 'ru')
					<img src="/img/headers/speak.svg" class="img-headers" alt="">
				@else
					<img src="/img/headers/en/speak.svg" class="img-headers" alt="">
				@endif
				<p class="starter-heading-description">{{$settings->speakers_content}}</p>
			</div>
			<div class="col-md-6 schedule">
				<button onclick="window.location.href='/uploads/{{$settings->speakers_pdf}}'" class="button-starter-speaker">@lang('static.body.schedule')</button>
			</div>
		</div>
		<div class="col-md-12 speakers-items" >

		<speakers></speakers>

		</div>
	<a href="#" class="buybutton md-trigger" data-modal="modal-buy-ticket">
		<div class="circle-pop"></div>
		<span class="bilettext">@lang('static.header.buy_ticket')</span>
	</a>
</div>
