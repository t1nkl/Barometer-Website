@extends('layouts.app')



@section('title')
	@if($locale == "en")
		{{$settings->seo_title}}
	@else
		{{$settings->seo_title}}
	@endif
@endsection
@section('description')
	@if($locale == "en")
		{{$settings->seo_description}}
	@else
		{{$settings->seo_description}}
	@endif
@endsection
@section('keywords')
	@if($locale == "en")
		{{$settings->seo_keywords}}
	@else
		{{$settings->seo_keywords}}
	@endif
@endsection



@section('content')



@include('sections.event')

@include('sections.spikery')

@include('sections.bary')

@include('sections.blog')

@include('sections.location')

@include('sections.partners')

@include('sections.bilety')

@include('sections.programs')

@include('sections.contact')



@endsection
