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
				<button class="button-starter-bary md-trigger" data-modal="modal-6">@lang('static.body.take_part')</button>
			</div>
		</div>
		<div class="col-md-12 speakers-items" >

			<bars></bars>

		</div>
	<a href="#" class="buybutton md-trigger" data-modal="modal-become-member">
		<div class="circle-pop"></div>
		<span class="bilettext">@lang('static.header.buy_ticket')</span>
	</a>


	{{--<div class="md-modal md-effect-1 buy-ticket-section-modal" id="modal-6">--}}
		{{--<div class="md-content buy-ticket-modal">--}}
			{{--<div class="col-md-12 buy-ticket-block">--}}
				{{--<form action="" class="form-buy-ticket">--}}
					{{--<div class="form-ticket-name col-md-12">--}}
						{{--<input type="text" class="form-name inputText" placeholder="Имя">--}}
					{{--</div>--}}
					{{--<div class="form-ticket-city col-md-12">--}}
						{{--<input type="text" class="form-city inputText" placeholder="Город">--}}
					{{--</div>--}}
					{{--<div class="form-ticket-company col-md-6">--}}
						{{--<input type="text" class="form-company inputText" placeholder="Организация">--}}
					{{--</div>--}}
					{{--<div class="form-ticket-position col-md-6">--}}
						{{--<input type="text" class="form-position inputText" placeholder="Должность">--}}
					{{--</div>--}}
					{{--<div class="form-ticket-phone col-md-12">--}}
						{{--<input type="text" class="form-phone inputText" placeholder="Телефон">--}}
					{{--</div>--}}
					{{--<div class="form-ticket-mail col-md-12">--}}
						{{--<input type="text" class="form-mail inputText" placeholder="E-mail">--}}
					{{--</div>--}}
					{{--<button type="submit" class="buy-ticket-button-modal">Стать участником</button>--}}
				{{--</form>--}}
				{{--<div class="ticket-close">--}}
					{{--<button class="md-close"></button>--}}
				{{--</div>--}}
			{{--</div>--}}
		{{--</div>--}}
	{{--</div>--}}
	{{--<div class="md-overlay"></div>--}}
</div>
