@extends('layouts.app_blog')



@section('title')
	@if($locale == "en")
		Blog | {{$settings->seo_title}}
	@else
		Блог | {{$settings->seo_title}}
	@endif
@endsection
@section('description')
	@if($locale == "en")
		Blog | {{$settings->seo_description}}
	@else
		Блог | {{$settings->seo_description}}
	@endif
@endsection
@section('keywords')
	@if($locale == "en")
		Blog | {{$settings->seo_keywords}}
	@else
		Блог | {{$settings->seo_keywords}}
	@endif
@endsection



@section('content')

<main class="row">
    <section class="col-md-12 tags">
        <span class="tag-header">@lang('static.blog.tag'):</span>
        <ul class="tag-list">
            @if(isset($tag))
                <li class="tag-item">
            @else
                <li class="tag-item active-tag">
            @endif
                <a href="/{{$locale}}/blog" class="tag-link">@lang('static.blog.tag_all')</a>
            </li>
            @foreach ($tags as $tagis)
                @if(isset($tag) && $tag->title == $tagis->title)
                    <li class="tag-item active-tag">
                @else
                    <li class="tag-item">
                @endif
                        <a href="/{{$locale}}/blog?tag={{$tagis->slug}}" class="tag-link">{{$tagis->title}}</a>
                    </li>
            @endforeach
        </ul>
    </section>
    @if(isset($tag))
        <div class="you-were-looking-for">
            <span>@lang('static.blog.search'): "{{$tag->title}}"</span>
        </div>
    @else
    @endif
    <section class="col-md-12 blog-section">
        @foreach ($blogs as $blog)
            <div class="blog-item col-md-11">
                <div class="col-md-6 blog-illustration">
                    <span class="tag-content-desk">
                        @foreach($blog->tags as $tags)
                            <a href="#">{{$tags->title}}</a>,&nbsp;
                        @endforeach
                    </span>
                    <a href="/{{$locale}}/blog/{{$blog->slug}}">
                        <img src="{{$blog->image}}" class="blog-illustration-img" alt="">
                    </a>
                </div>
                <div class="col-md-6 blog-text">
                    <span class="tag-content-mob"><a href="#">Tag</a></span>
                    <span class="date">{{ Date::parse($blog->date)->format('j.m.Y') }}</span>
                    <h3 class="blog-heading">{{$blog->title}}</h3>
                    <p class="blog-txt">{!! str_limit($blog->content, $limit = 410, $end = '...') !!}</p>
                    <a href="/{{$locale}}/blog/{{$blog->slug}}" class="blog-more-link">@lang('static.blog.more') <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                </div>
            </div>
        @endforeach
    </section>
</main>

@endsection
