<!-- О локации -->
<div class="section row speakers-section" id="section5">
	<div class="col-md-12 starter-section about-location sectionPlaceTop">
		<div class="col-md-12 lowSizer">
			@if($locale == 'ru')
				<img src="/img/headers/loc.svg" class="img-headers" alt="">
			@else
				<img src="/img/headers/en/location.svg" class="img-headers" alt="">
			@endif
			<p class="starter-heading-description">{{$settings->location_content}}</p>
		</div>
		<!-- <div class="col-md-6 locallity lowSizer">
			<a href="{{$settings->location_url}}" class="button-starter-map">@lang('static.body.map')</a>
		</div> -->
		<div class="col-md-6 contact-info">
			<div class="contact-bl">
				<div class="icongrafic">
					<img src="/img/location_on-loc.svg" class="img-fluid" alt="">
				</div>
				<div class="contact-txt">
					<p class="location">{{$settings->place}}, {{$settings->address}}</p>
				</div>
			</div>
			<div class="contact-bl">
				<div class="icongrafic">
					<img src="/img/envelope-loc.svg" class="img-fluid" alt="">
				</div>
				<div class="contact-txt">
					<p class="location"><a class="location" href="mailto:{{$settings->email}}">{{$settings->email}}</a></p>
				</div>
			</div>
			<div class="contact-bl">
				<div class="icongrafic">
					<img src="/img/phone-loc.svg" class="img-fluid" alt="">
				</div>
				<div class="contact-txt">
					<p class="location"><a class="location" href="tel:{{ str_replace(' ', '', $settings->phone) }}"> {{$settings->phone}}</a></p>
				</div>
			</div>
		</div>
		<div class="col-md-6 contact-illustration">
            
            <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDRsEXnF7-eUyizn92KP6W_RxfCZ0ZnEmA&callback=initMap"></script>
            <div id="map"></div>
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
                    
			<!-- <img src="{{$settings->location_image}}" class="img-fluid" alt=""> -->
		</div>
		<a href="#" class="buybuttonMain md-trigger" data-modal="modal-buy-ticket">
			<!-- <div class="circle-pop"></div> -->
			<span class="bilettext">@lang('static.header.buy_ticket')</span>
		</a>
	</div>
	
</div>
