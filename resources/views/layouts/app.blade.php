<!DOCTYPE html>
<html lang="{{$locale}}" xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>@yield('title')</title>
		<meta name="description" content="@yield('description')" />
		<meta name="keywords"  content="@yield('keywords')" />
		<link rel="shortcut icon" href="/img/favicon.png" type="image/png">
		<meta name="author" content="Kyrylo" />
		<meta name="copyright" content="Handcrafted by Kyrylo Kovalenko" />
		<meta name="Resource-type" content="Document" />

		<meta name="csrf-token" content="{{ csrf_token() }}">

		<link href="/css/jquery.fullpage.css" rel="stylesheet" type="text/css" />
		<link href="/css/bootstrap.css" rel="stylesheet" type="text/css" />
		<link href="/css/style.css" rel="stylesheet" type="text/css" />
		<link href="/css/components.css" rel="stylesheet" type="text/css" />
		<link href="/packages/timetable/timetablejs.css" rel="stylesheet" type="text/css" />
		<link href="/packages/timetable/demo.css" rel="stylesheet" type="text/css" />
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700&amp;subset=cyrillic" rel="stylesheet">
	</head>
	<body>
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
		<!-- /*===== javascript =====*/ -->
		<script type="text/javascript" src="/js/app.js"></script>
		<script type="text/javascript" src="/js/jquery-3.2.1.js"></script>
		<script type="text/javascript" src="/js/jquery-1.9.1.min.js"></script>
		<script type="text/javascript" src="/js/jquery-ui.min.js"></script>
		<script type="text/javascript" src="/js/tether.min.js"></script>
		<script type="text/javascript" src="/js/bootstrap.js"></script>
		<script type="text/javascript" src="/js/scrolloverflow.js"></script>
		<script type="text/javascript" src="/packages/timetable/timetable.min.js"></script>
		{{--<script type="text/javascript" src="/js/jquery.lazyload.js"></script>--}}
		@if (Identify::device()->getName() == 'iPad' || Identify::device()->getName() == 'Android' || Identify::device()->getName() == 'iPhone' || Identify::device()->getName() == 'Windows Phone')
		@else
		<!-- /*===== fullpage scroll =====*/ -->
		<script type="text/javascript" src="/js/jquery.fullpage.js"></script>
		<script type="text/javascript">
			$(document).ready(function() {
				$('#fullpage').fullpage({
					anchors: ['Главная', 'О-мероприятии', 'Спикеры', 'Бары', 'Блог', 'О-локации', 'Об организаторах', 'Партнеры', 'Билеты', 'Программа', 'Контакты'],
					menu: "#myMenu",
					sectionsColor: ['#121C5C', '#2C56AB', '#05A1B7', '#FF4DD4', '#A345C6', '#A318A9', '#E8E82D', '#E6AC24', '#EA3333', '#19C912', '#20E3D9', '#ef6b58'],
					navigation: true,
					navigationPosition: 'left',
					scrollOverflow: true,
					css3: false,
					lazyLoading: true,
					scrollingSpeed: (window.devicePixelRatio <= 1500) ? 1000 : 700,
                	slidesNavigation: true,
					easing: 'linear',
					verticalCentered: false,
					loopHorizontal: true,
					showActiveTooltip: false,
					navigationTooltips: ['Главная', 'О мероприятии', 'Спикеры', 'Бары', 'Блог', 'О локации', 'Об организаторах', 'Партнеры', 'Билеты', 'Программа', 'Контакты']
				});
			});
		</script>
		@endif
		<script type="text/javascript" src="/js/jquery.maskinput.js"></script>
		<!-- /*===== custom javascript =====*/ -->
		<script type="text/javascript">
            <!-- /*===== preloader =====*/ -->
			$(window).load(function() {
				$(".loader").delay(100).fadeOut("slow");
			});

            <!-- /*===== maskinput =====*/ -->
            $(function(e) {
                e("#phone").mask("+99 (999) 999 99 99")
            });

            <!-- /*===== contactform ticket =====*/ -->
            $('#contactformticket').submit(function nestocontactticket(event) {
                event.preventDefault();
                var name = $('#name').val();
                var city = $('#city').val();
                var organization = $('#organization').val();
                var position = $('#position').val();
                var phone = $('#phone').val();
                var email = $('#email').val();
                if (name === "" || name === " " || name === "  " || name === "   " || name === "    " || name === "     " || name === "      ") {
                    $('#name').addClass('form-error');
                    return /\s/g.test(name);
                }
                $.ajax({
                    type: "POST",
                    url: '/contact',
                    data: {name: name, city: city, organization: organization, position: position, phone: phone, email:email},
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success:function(data){
                        $("#contactform").slideUp(), $(".nesto-response").html("Спасибо, ваша заявка успешно оставлена.")
                    },
                    error: function(data){
                        $("#contactform").slideUp(), $(".nesto-response").html("Введите коректные данные")
                        setTimeout(nestocontact, 2000);
                    }
                });
            });

            <!-- /*===== contactform bar =====*/ -->
            $('#contactformbar').submit(function nestocontactbar(event) {
                event.preventDefault();
                var name = $('#name').val();
                var city = $('#city').val();
                var organization = $('#organization').val();
                var position = $('#position').val();
                var phone = $('#phone').val();
                var email = $('#email').val();
                if (name === "" || name === " " || name === "  " || name === "   " || name === "    " || name === "     " || name === "      ") {
                    $('#name').addClass('form-error');
                    return /\s/g.test(name);
                }
                $.ajax({
                    type: "POST",
                    url: '/members',
                    data: {name: name, city: city, organization: organization, position: position, phone: phone, email:email},
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success:function(data){
                        $("#contactform").slideUp(), $(".nesto-response").html("Спасибо, ваша заявка успешно оставлена.")
                    },
                    error: function(data){
                        $("#contactform").slideUp(), $(".nesto-response").html("Введите коректные данные")
                        setTimeout(nestocontact, 2000);
                    }
                });
            });

            <!-- /*===== timetable =====*/ -->
	@foreach($fest_days as $fest_date => $fest_day)
		var timetable = new Timetable();
			timetable.setScope({{$program_days[0]}},{{$program_days[1]}});
			timetable.addLocations([
			@foreach($scenes as $scene)
				'{{$scene->title}}',
			@endforeach
				]
			);
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
					timetable.addEvent('{{$program->title}}', '{{$program->scene->title}}', new Date({{\Date::parse($program->day)->format('Y')}},{{\Date::parse($program->day)->format('m')}},{{\Date::parse($program->day)->format('d')}},{{\Date::parse($program->start_date)->format('H')}},{{\Date::parse($program->start_date)->format('i')}}), new Date({{\Date::parse($program->day)->format('Y')}},{{\Date::parse($program->day)->format('m')}},{{\Date::parse($program->day)->format('d')}},{{\Date::parse($program->end_date)->format('H')}},{{\Date::parse($program->end_date)->format('i')}}), options);
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

            <!-- /*===== tablist =====*/ -->
            $('#tablist a').click(function (e) {
                e.preventDefault();
                @foreach($fest_days as $fest_day)
                	$('a[href="#fest_day{{$loop->iteration}}"]').tab('show');
                @endforeach
            });

		@if (Identify::device()->getName() == 'iPad' || Identify::device()->getName() == 'Android' || Identify::device()->getName() == 'iPhone' || Identify::device()->getName() == 'Windows Phone')
            <!-- /*===== timetable overflow =====*/ -->
			$( ".timetable section" ).css( "overflow-x", "scroll" );
			$( ".timetable section" ).css( "-webkit-overflow-scrolling", "touch" );
		@endif

		</script>
		<script type="text/javascript" src="/js/classie.js"></script>
		<script type="text/javascript" src="/js/modalEffects.js"></script>
	</body>
</html>
