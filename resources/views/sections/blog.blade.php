<!-- Блог -->
<div class="section row" id="section4">
	<div class="col-md-12 starter-section blog-bl">
		<div class="col-md-6">
			@if($locale == 'ru')
				<img src="/img/headers/blog.svg" class="img-headers" alt="">
			@else
				<img src="/img/headers/en/blog.svg" class="img-headers" alt="">
			@endif
		</div>
		<div class="col-md-6 bloggy">
			<a href="/{{$locale}}/blog" class="button-starter-blog">@lang('static.body.blog')</a>
		</div>
		<div class="col-md-12 blog-grid">
			@foreach($blogs as $blog)
				<div class="col-md-5 col-xs-12 blog-items" style="background-image: url('{{$blog->image}}')">
					<a href="/{{$locale}}/blog/{{$blog->slug}}" class="blog-item-link">
						<div class="blog-description">
							<h4 class="blog-item-heading">{{$blog->title}}</h4>
							<img src="/img/arrow-right.svg" class="img-fluid img-go-to-blog" alt="">
						</div>
					</a>
				</div>
			@endforeach
		</div>
		<a href="#" class="buybuttonMain md-trigger" data-modal="modal-buy-ticket">
		<!-- <div class="circle-pop"></div> -->
		<span class="bilettext">@lang('static.header.buy_ticket')</span>
	</a>
	</div>
	
</div>
