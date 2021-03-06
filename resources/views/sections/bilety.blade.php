<!-- Билеты -->
<div class="section row speakers-section" id="section8">
	<div class="col-md-12 starter-section ticket-section">
		<div class="col-md-12">
			@if($locale == 'ru')
				<img src="/img/headers/tick.svg" class="img-headers" alt="">
			@else
				<img src="/img/headers/en/tickets.svg" class="img-headers" alt="">
			@endif
		</div>
		
		@foreach($tickets as $ticket)
			@if(isset($ticket->id) && $ticket->id == 1)
				<div class="col-md-4 standart-ticket">
					<h2 class="ticket-stan-heading">{{$ticket->type}} <span>{{$ticket->price}}</span>@lang('static.body.ticket_prise')</h2>
					@foreach(json_decode($ticket->options, true) as $value)
						<p class="ticket-stan">{!! $value['title'] !!}</p>
					@endforeach
					<a href="#" data-modal="modal-buy-ticket" class="button-standart md-trigger">@lang('static.header.buy_ticket')</a>
				</div>
			@elseif(isset($ticket->id) && $ticket->id == 2)
				<div class="col-md-4 premium-ticket">
					<h2 class="ticket-prem-heading">{{$ticket->type}} <span>{{$ticket->price}}</span>@lang('static.body.ticket_prise')</h2>
					@foreach(json_decode($ticket->options, true) as $value)
						<p class="ticket-prem">{!! $value['title'] !!}</p>
					@endforeach
					@foreach(json_decode($ticket->premium_options, true) as $value)
						<p class="ticket-prem golden-plus">{!! $value['title'] !!}</p>
					@endforeach
					<a href="#" data-modal="modal-buy-ticket" class="button-premium md-trigger">@lang('static.header.buy_ticket')</a>
				</div>
				<div class="buy-ticket-mobile-section">
					<a href="#" data-modal="modal-buy-ticket" class="buy-ticket-mobile md-trigger">@lang('static.header.buy_ticket')</a>
				</div>
			@endif
		@endforeach
		
		<!-- <a href="#" class="buybuttonMain md-trigger" data-modal="modal-buy-ticket">
		<div class="circle-pop"></div>
			<span class="bilettext">@lang('static.header.buy_ticket')</span>
		</a> -->
	</div>
	
</div>





