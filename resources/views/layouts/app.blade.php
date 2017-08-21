<!DOCTYPE html>
<html lang="{{ $locale }}" prefix="og: http://ogp.me/ns#" xmlns="http://www.w3.org/1999/xhtml" xmlns:fb="http://ogp.me/ns/fb#" xmlns:og="http://ogp.me/ns#">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="robots" content="index,follow">
	<title>@yield('title')</title>
	<meta name="description" content="@yield('description')" />
	<meta name="keywords"  content="@yield('keywords')" />
	<link rel="shortcut icon" href="/img/favicon.png" type="image/png">
	<meta name="author" content="Kyrylo" />
	<meta name="copyright" content="Handcrafted by Kyrylo Kovalenko" />
	<meta name="Resource-type" content="Document" />
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.css') }}"/>
	<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}"/>
	<link rel="stylesheet" type="text/css" href="{{ asset('css/components.css') }}"/>
	<link rel="stylesheet" type="text/css" href="{{ asset('packages/timetable/timetablejs.css') }}"/>
	<link rel="stylesheet" type="text/css" href="{{ asset('packages/timetable/demo.css') }}"/>
	@if (Identify::os()->getName() == 'Windows' || Identify::os()->getName() == 'OS X' || Identify::os()->getName() == 'Linux')
	<!-- /*===== fullpage scroll =====*/ -->
	<link rel="stylesheet" type="text/css" href="{{ asset('css/jquery.fullpage.css') }}"/>
	@else
	@endif
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700&amp;subset=cyrillic" rel="stylesheet">
</head>
<body id="body">
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-81257860-1', 'auto');
  ga('send', 'pageview');

</script>
	<div class="loader" id="loader">
		<div class="loader-inner">
			<div class="loader-line-wrap">
				<div class="loader-line"></div>
			</div>
			<div class="loader-line-wrap">
				<div class="loader-line"></div>
			</div>
			<div class="loader-line-wrap">
				<div class="loader-line"></div>
			</div>
			<div class="loader-line-wrap">
				<div class="loader-line"></div>
			</div>
			<div class="loader-line-wrap">
				<div class="loader-line"></div>
			</div>
		</div>
	</div>
	<div id="fullpage" class="container-fluid">

		@include('includes.header')

		@yield('content')

		@include('includes.footer')

	</div>
	<div class="scrollTopBut">
		<p><a href="#main"></a></p>
	</div>	
	<!-- /*===== javascript =====*/ -->
	<script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/jquery-3.2.1.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/jquery-1.9.1.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/jquery-ui.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/tether.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/bootstrap.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/scroll.js') }}"></script>
	<script type="text/javascript" src="{{ asset('packages/timetable/timetable.min.js') }}"></script>
	<!-- <script type="text/javascript" src="{{ asset('js/jquery.lazyload.js') }}"></script> -->
	@if (Identify::os()->getName() == 'Windows' || Identify::os()->getName() == 'OS X' || Identify::os()->getName() == 'Linux')
	<!-- /*===== fullpage scroll =====*/ -->
	<script type="text/javascript" src="{{ asset('js/scrolloverflow.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/jquery.fullpage.extensions.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/jquery.fullpage.js') }}"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			$('#fullpage').fullpage({
				anchors: ['main', 'about', 'speakers', 'bars', 'blog', 'location', 'organizers', 'partners', 'tickets', 'program', 'contacts'],
				menu: "#myMenu",
				sectionsColor: ['#121C5C', '#2C56AB', '#05A1B7', '#FF4DD4', '#A345C6', '#A318A9', '#E8E82D', '#E6AC24', '#EA3333', '#19C912', '#20E3D9', '#ef6b58'],
				navigation: true,
				navigationPosition: 'left',
				scrollOverflow: true,
				css3: false,
				lazyLoading: false,
				scrollingSpeed: (window.devicePixelRatio <= 1500) ? 1000 : 700,
				slidesNavigation: true,
				easing: 'linear',
				verticalCentered: false,
				loopHorizontal: true,
				showActiveTooltip: false,
				fitToSection: true,
				navigationTooltips: ["@lang('static.header.navbar.main')", "@lang('static.header.navbar.about')", "@lang('static.header.navbar.speakers')", "@lang('static.header.navbar.bars')", "@lang('static.header.navbar.blog')", "@lang('static.header.navbar.location')", "@lang('static.header.navbar.organisation')", "@lang('static.header.navbar.partner')", "@lang('static.header.navbar.ticket')", "@lang('static.header.navbar.programs')", "@lang('static.header.navbar.contact')"]
			});
		});
	</script>
	@else
	@endif
	<script type="text/javascript" src="{{ asset('js/jquery.maskinput.js') }}"></script>

	<!-- /*===== custom javascript =====*/ -->
	<script type="text/javascript">
		<!-- /*===== preloader =====*/ -->
		$(window).load(function() {
			$(".loader").delay(100).fadeOut("slow");
		});

		<!-- /*===== video modal stop =====*/ -->
		$('.md-close').click(function() {
			jQuery("iframe").each(function() {
		        jQuery(this)[0].contentWindow.postMessage('{"event":"command","func":"stopVideo","args":""}', '*')
		    });
		})
		
		<!-- /*===== maskinput =====*/ -->
		$(function(e) {
			e(".form-ticket-phone").mask("+99 (999) 999 99 99")
		});
		$(function(e) {
			e(".form-member-phone").mask("+99 (999) 999 99 99")
		});

		<!-- /*===== contactform ticket =====*/ -->
		$('#contactformticket').submit(function nestocontactticket(event) {
			event.preventDefault();
			var name = $('.form-ticket-name').val();
			var city = $('.form-ticket-city').val();
			var organization = $('.form-ticket-organization').val();
			var position = $('.form-ticket-position').val();
			var phone = $('.form-ticket-phone').val();
			var email = $('.form-ticket-email').val();
			$.ajax({
				type: "POST",
				url: '/contact',
				data: {name: name, city: city, organization: organization, position: position, phone: phone, email:email},
				headers: {
					'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
				},
				success:function(data){
					window.location.href = "{!! $settings->ticket_url !!}";
					// $("#contactformticket").slideUp(), $(".nesto-ticket-response").html("@lang('static.modal_form.success')")
				},
				error: function(data){
					$("#contactformticket").slideUp(), $(".nesto-ticket-response").html("Error")
					setTimeout(nestocontact, 2000);
				}
			});
		});

		<!-- /*===== contactform bar =====*/ -->
		$('#contactformbar').submit(function nestocontactbar(event) {
			event.preventDefault();
			var name = $('.form-member-name').val();
			var city = $('.form-member-city').val();
			var organization = $('.form-member-organization').val();
			var position = $('.form-member-position').val();
			var phone = $('.form-member-phone').val();
			var email = $('.form-member-email').val();
			$.ajax({
				type: "POST",
				url: '/members',
				data: {name: name, city: city, organization: organization, position: position, phone: phone, email:email},
				headers: {
					'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
				},
				success:function(data){
					$("#contactformbar").slideUp(), $(".nesto-member-response").html("@lang('static.modal_form.success')")
				},
				error: function(data){
					$("#contactformbar").slideUp(), $(".nesto-member-response").html("Error")
					setTimeout(nestocontact, 2000);
				}
			});
		});

		<!-- /*===== timetable =====*/ -->
		@foreach($fest_days as $fest_date => $fest_day)
		@if (Identify::os()->getName() == 'Windows' || Identify::os()->getName() == 'OS X' || Identify::os()->getName() == 'Linux')
		$( ".timetable section header li .time-label" ).first().css( "left", "-30px" );
		$( ".timetable section header li .time-label" ).last().css( "left", "30px" );
		@else
		@endif
		var timetable = new Timetable();
		timetable.setScope({{$program_days[0]}},{{$program_days[1]}});
		timetable.addLocations([
			@foreach($scenes as $scene)
			'{{$scene->title}}',
			@endforeach
			]);
		@foreach($programs as $program)
		@if($fest_date == \Date::parse($program->day)->format('d-m-Y'))
		@if($program->type == 'Premium')
		var options = {
			class: 'event-hover event-yellow md-trigger',
			data: {
				id: '{{$program->id}}',
				modal: 'modal-{{$program->id}}'
			}
		};
		@else
		var options = {
			class: 'event-hover event-white md-trigger',
			data: {
				id: '{{$program->id}}',
				modal: 'modal-{{$program->id}}'
			}
		};
		@endif
		timetable.addEvent('{!!$program->title!!}', '{{$program->scene->title}}', new Date({{\Date::parse($program->day)->format('Y')}},{{\Date::parse($program->day)->format('m')}},{{\Date::parse($program->day)->format('d')}},{{\Date::parse($program->start_date)->format('H')}},{{\Date::parse($program->start_date)->format('i')}}), new Date({{\Date::parse($program->day)->format('Y')}},{{\Date::parse($program->day)->format('m')}},{{\Date::parse($program->day)->format('d')}},{{\Date::parse($program->end_date)->format('H')}},{{\Date::parse($program->end_date)->format('i')}}), options);
		@endif
		@endforeach
		var renderer = new Timetable.Renderer(timetable);
		renderer.draw('#timetable{{ $loop->iteration }}');
		@endforeach
		$( document ).ready(function() {
			var tabs = document.getElementsByClassName("time-entry");
			if (tabs) {
				for (var i = 0; i < tabs.length; i++) {
					var tab = tabs[i];
					var span = document.createElement('span');
					span.className = "icon-add";
					span.innerHTML = "+";
					tab.appendChild(span);
				}
			}
		});
	</script>
	<script type="text/javascript" src="{{ asset('js/classie.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/modalEffects.js') }}"></script>

	<!-- /*===== google map script =====*/ -->
	<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDRsEXnF7-eUyizn92KP6W_RxfCZ0ZnEmA&callback=initMap"></script>
	<script type="text/javascript">
    	function initMap() {
			var kievCoords = {lat: 50.4490041, lng: 30.5407828};
			var map = new google.maps.Map(document.getElementById('map'), {
			    zoom: 17,
			    center: kievCoords
			});
			var marker = new google.maps.Marker({
			    position: kievCoords,
			    map: map,
			    title: 'Место проведения',
                icon: 'img/location_on-loc-map.svg'
			});
		}
    </script>
</body>
</html>
