<!-- Header -->
<div class="section row" id="section0">
	<nav class="intro col-md-12 navigation-block navbar navbar-light navbar-toggleable-md">
		<div class="event-2016">
			<a href="{{url('/'.$locale)}}" class="event-2016-link" target="_blank">
				<p><img src="/img/plane-left.svg" class="event-2016-plane" alt=""></p>
				<p class="event-2016-txt">@lang('static.header.last_event')</p>
			</a>
		</div>
		<a href="{{url('/'.$locale)}}" class="logo-wrapper">
			<img src="/img/logo-small.png" class="logo-main" alt="">
		</a>
		<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<img src="/img/menu.svg" class="navbar-toggler-icon open-menu" alt="">
		</button>
		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav mr-auto">
                @if (Identify::device()->getName() == 'iPad' || Identify::device()->getName() == 'Android' || Identify::device()->getName() == 'iPhone' || Identify::device()->getName() == 'Windows Phone')
                    <li class="nav-item">
                        <a class="nav-link main-menu" href="#section1">@lang('static.header.navbar.about')</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link main-menu" href="#section2">@lang('static.header.navbar.speakers')</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link main-menu" href="#section3">@lang('static.header.navbar.bars')</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link main-menu" href="/{{$locale}}/blog">@lang('static.header.navbar.blog')</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link main-menu" href="#section6">@lang('static.header.navbar.organisation')</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link main-menu" href="#section10">@lang('static.header.navbar.contact')</a>
                    </li>
                @else
                    <li class="nav-item">
                        <a data-menuanchor="О-мероприятии" class="nav-link main-menu" href="#О-мероприятии">@lang('static.header.navbar.about')</a>
                    </li>
                    <li class="nav-item">
                        <a data-menuanchor="Спикеры" class="nav-link main-menu" href="#Спикеры">@lang('static.header.navbar.speakers')</a>
                    </li>
                    <li class="nav-item">
                        <a data-menuanchor="Бары" class="nav-link main-menu" href="#Бары">@lang('static.header.navbar.bars')</a>
                    </li>
                    <li class="nav-item">
                        <a data-menuanchor="Блог" class="nav-link main-menu" href="/{{$locale}}/blog">@lang('static.header.navbar.blog')</a>
                    </li>
                    <li class="nav-item">
                        <a data-menuanchor="Об организаторах" class="nav-link main-menu" href="#Об организаторах">@lang('static.header.navbar.organisation')</a>
                    </li>
                    <li class="nav-item">
                        <a data-menuanchor="Контакты" class="nav-link main-menu" href="#Контакты">@lang('static.header.navbar.contact')</a>
                    </li>
                @endif

				<li class="nav-lang">
					@if(url()->current() == url('/').'/ru' || url()->current() == url('/').'/en')
						@if($locale == 'ru')
							<a href="/language/en/" class="nav-link lang-menu">EN</a>
						@else
							<a href="/language/ru/" class="nav-link lang-menu">RU</a>
						@endif
					@endif
				</li>
			</ul>
			<ul class="navbar-social">
				<li class="nav-item">
					<a class="nav-link-soc" href="{{$settings->facebook}}" target="_blank"><img src="/img/facebook.svg" alt=""></a>
				</li>
				<li class="nav-item">
					<a class="nav-link-soc" href="{{$settings->instagram}}" target="_blank"><img src="/img/instagram.svg" alt=""></a>
				</li>
				<li class="nav-item">
					<a class="nav-link-soc" href="{{$settings->youtube}}" target="_blank"><img src="/img/youtube.svg" alt=""></a>
				</li>
			</ul>
		</div>
	</nav>
	<div class="col-md-12 header-illustration" style="background-image: url(/../img/image-1-min.png)">
		<div class="header-info">
			<h1 class="header-timing"><span class="numbers">{{ Date::parse($settings->start_date)->format('j') }} - {{ Date::parse($settings->end_date)->format('j F') }}</span></h1>
			<h2 class="header-timing-h2">{{$settings->place}} <span class="dot"></span> BAROMETER International Bar Show</h2>
			<a class="buy-ticket md-trigger" data-modal="modal-buy-ticket">@lang('static.header.buy_ticket')</a>
		</div>
		<a href="#video" class="md-trigger" data-modal="modal-video">
			<div class="watch-video">
				<p>@lang('static.header.video')</p>
			</div>
		</a>
		<div class="md-modal md-effect-1" id="modal-video">
			<div class="md-content watchvideo-modal">
				<div class="col-md-12 watchvideo-block">
					<iframe width="100%" height="600px" src="https://www.youtube.com/embed/eKFTSSKCzWA" frameborder="0" allowfullscreen></iframe>
					<button class="md-close"></button>
				</div>
			</div>
		</div>
	</div>
</div>

