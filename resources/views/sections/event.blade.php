<!-- О мероприятии -->
<div class="section row" id="section1">
	<div class="col-md-12 starter-section">
		<div class="col-md-12">
			@if($locale == 'ru')
				<img src="/img/headers/about.svg" class="img-headers" alt="">
			@else
				<img src="/img/headers/en/about.svg" class="img-headers" alt="">
			@endif
		</div>
		<div class="events-section">
			<div class="events-textblock">
				{!!$event->content!!}
			</div>
			<div class="events-illustrations">
		@if($event->photos)
			@foreach($event->photos as $photos)
				<img src="/uploads/{{$photos}}" class="img-fluid events-img" alt="">
			@endforeach
		@endif
			</div>
			<a href="#" class="buybutton md-trigger" data-modal="modal-buy-ticket">
				<div class="circle-pop"></div>
				<span class="bilettext">@lang('static.header.buy_ticket')</span>
			</a>
		</div>
	</div>
</div>
