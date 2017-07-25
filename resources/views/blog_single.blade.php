@extends('layouts.app_blog')



@section('title')
    {{$blogs->title}} | Blog | {{$settings->seo_title}}
@endsection
@section('description')
    Blog | {{$settings->seo_description}}
@endsection
@section('keywords')
    Blog | {{$settings->seo_keywords}}
@endsection



@section('content')

    <section class="row">
        <div class="col-md-12 blog-item-single">
            <a href="#" onclick="window.history.go(-1); return false;" class="return-back-link-blog"><img
                        src="/img/arrow-left.png" class="" alt=""> @lang('static.blog.back')</a>
            <div class="blog-single-main-illustration" style="background-image:url('{{$blogs->image}}');">
            </div>
            <div class="col-lg-8 col-md-12 blog-content-single">
                <span class="tag-content-mob"><a href="#">Tag</a></span>
                <span class="date">{{ Date::parse($blogs->date)->format('j.m.Y') }}</span>
                <h3 class="blog-heading">{{$blogs->title}}</h3>
                    {!! $blogs->content !!}
            </div>
        </div>
    </section>

@endsection