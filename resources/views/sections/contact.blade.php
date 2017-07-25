<!-- Контакты -->
<div class="section fp-auto-height-responsive row speakers-section" id="section10">
	<div class="col-md-12 starter-section">
		<div class="col-md-6 footer-logo">
			<img src="/img/logo_2017.png" class="img-fluid contacts-bar-img" alt="">
			<img src="/img/headers/slogan.svg" class="img-fluid img-slogan" alt="">
			<ul class="navbar-social-contact">
				<li class="nav-item">
				    <a class="nav-link-soc-contact" href="{{$settings->facebook}}" target="_blank">
							<img src="/img/facebook-w.svg" alt="">
						</a>
				</li>
				<li class="nav-item">
				    <a class="nav-link-soc-contact" href="{{$settings->instagram}}" target="_blank">
							<img src="/img/instagram-w.svg" alt="">
						</a>
				</li>
				<li class="nav-item">
				    <a class="nav-link-soc-contact" href="{{$settings->youtube}}" target="_blank">
							<img src="/img/youtube-w.svg" alt="">
						</a>
				</li>
			</ul>
		</div>
		<div class="col-md-12 contact-info contact-padding">
			<div class="col-md-4 contacts-bar">
				<div class="icongrafic-bar">
					<img src="/img/location_on - material copy 2.svg" class="img-fluid" alt="">
				</div>
				<div class="contacts-bar-text">
					<p class="location">{{$settings->place}}, {{$settings->address}}</p>
				</div>
			</div>
			<div class="col-md-4 contacts-bar">
				<div class="icongrafic-bar">
					<img src="/img/envelope - FontAwesome.svg" class="img-fluid" alt="">
				</div>
				<div class="contacts-bar-text">
					<p class="location"><a class="location" href="mailto:{{$settings->email}}">{{$settings->email}}</a></p>
				</div>
			</div>
			<div class="col-md-4 contacts-bar">
				<div class="icongrafic-bar">
					<img src="/img/phone - FontAwesome.svg" class="img-fluid" alt="">
				</div>
				<div class="contacts-bar-text">
					<p class="location"><a class="location" href="tel:{{$settings->phone}}">{{$settings->phone}}</a></p>
				</div>
			</div>
		</div>

		<div class="col-md-12 contact-navigation">
			<ul class="navbar-nav footer-last-contact">
				<li class="nav-item active">
					<a data-menuanchor="Программа" class="nav-link" href="#Программа">@lang('static.header.navbar.program')</a>
				</li>
				<li class="nav-item">
					<a data-menuanchor="Спикеры" class="nav-link" href="#Спикеры">@lang('static.header.navbar.speakers')</a>
				</li>
				<li class="nav-item">
					<a data-menuanchor="Партнеры" class="nav-link" href="#Партнеры">@lang('static.header.navbar.partner')</a>
				</li>
				<li class="nav-item">
					<a data-menuanchor="Бары" class="nav-link" href="#Бары">@lang('static.header.navbar.bars')</a>
				</li>
				<li class="nav-item">
					<a data-menuanchor="Блог" class="nav-link" href="#Блог">@lang('static.header.navbar.blog')</a>
				</li>
			</ul>
		</div>

	</div>

	<a href="#" class="buybutton md-trigger" data-modal="modal-buy-ticket">
		<div class="circle-pop"></div>
		<span class="bilettext">@lang('static.header.buy_ticket')</span>
	</a>
</div>
