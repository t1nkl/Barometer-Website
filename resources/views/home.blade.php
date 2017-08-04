@extends('layouts.app')



@section('title')
{{$settings->seo_title}}
@endsection
@section('description')
{{$settings->seo_description}}
@endsection
@section('keywords')
{{$settings->seo_keywords}}
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
