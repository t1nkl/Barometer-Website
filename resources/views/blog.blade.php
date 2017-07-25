@extends('layouts.app_blog')



@section('title')
    Blog | {{$settings->seo_title}}
@endsection
@section('description')
    Blog | {{$settings->seo_description}}
@endsection
@section('keywords')
    Blog | {{$settings->seo_keywords}}
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

        <!-- Search results -->
        {{--<section class="row search-results">--}}
            {{--<div class="you-were-looking-for">--}}
                {{--<span>You were looking for: "word"</span>--}}
            {{--</div>--}}
            {{--<div class="col-md-12 search-result blog-section">--}}

                {{--<div class="blog-item col-md-11">--}}
                    {{--<div class="col-md-6 blog-illustration">--}}
                        {{--<span class="tag-content-desk"><a href="#">Tag</a></span>--}}
                        {{--<a href="/blog-single">--}}
                            {{--<img src="/img/bluecity.jpg" class="blog-illustration-img" alt="">--}}
                        {{--</a>--}}
                    {{--</div>--}}
                    {{--<div class="col-md-6 blog-text">--}}
                        {{--<span class="tag-content-mob"><a href="#">Tag</a></span>--}}
                        {{--<span class="date">25.05.2017</span>--}}
                        {{--<h3 class="blog-heading">Lorem Ipsum для текстов на латинице с разцами</h3>--}}
                        {{--<p class="blog-txt">Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне.--}}
                            {{--Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века. В то--}}
                            {{--время некий безымянный печатник создал большую коллекцию размеров и форм шрифтов, используя--}}
                            {{--Lorem Ipsum для распечатки образцов. Lorem Ipsum не только успешно пережил без заметных--}}
                            {{--изменений пять веков, но и перешагнул в электронный дизайн. Его популяризации в новое время--}}
                            {{--послужили публикация листов Letraset с образцами Lorem Ipsum в 60-х годах и, в более--}}
                            {{--недавнее время, программы электронной вёрстки типа Aldus PageMaker, в шаблонах которых--}}
                            {{--используется Lorem Ipsum.</p>--}}
                        {{--<a href="/blog-single" class="blog-more-link">more <i class="fa fa-long-arrow-right"--}}
                                                                              {{--aria-hidden="true"></i></a>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="blog-item col-md-11">--}}
                    {{--<div class="col-md-6 blog-illustration">--}}
                        {{--<span class="tag-content-desk"><a href="#">Tag</a></span>--}}
                        {{--<a href="/blog-single">--}}
                            {{--<img src="/img/bluecity.jpg" class="blog-illustration-img" alt="">--}}
                        {{--</a>--}}
                    {{--</div>--}}
                    {{--<div class="col-md-6 blog-text">--}}
                        {{--<span class="tag-content-mob"><a href="#">Tag</a></span>--}}
                        {{--<span class="date">25.05.2017</span>--}}
                        {{--<h3 class="blog-heading">Lorem Ipsum для текстов на латинице с разцами</h3>--}}
                        {{--<p class="blog-txt">Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне.--}}
                            {{--Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века. В то--}}
                            {{--время некий безымянный печатник создал большую коллекцию размеров и форм шрифтов, используя--}}
                            {{--Lorem Ipsum для распечатки образцов. Lorem Ipsum не только успешно пережил без заметных--}}
                            {{--изменений пять веков, но и перешагнул в электронный дизайн. Его популяризации в новое время--}}
                            {{--послужили публикация листов Letraset с образцами Lorem Ipsum в 60-х годах и, в более--}}
                            {{--недавнее время, программы электронной вёрстки типа Aldus PageMaker, в шаблонах которых--}}
                            {{--используется Lorem Ipsum.</p>--}}
                        {{--<a href="/blog-single" class="blog-more-link">more <i class="fa fa-long-arrow-right"--}}
                                                                              {{--aria-hidden="true"></i></a>--}}
                    {{--</div>--}}
                {{--</div>--}}

            {{--</div>--}}
        {{--</section>--}}

        <!-- Tags -->
        {{--<section class="row tag-results">--}}
            {{--<div class="you-were-looking-for">--}}
                {{--<span>You were looking for: "tag"</span>--}}
            {{--</div>--}}
            {{--<div class="col-md-12 tag-result blog-section">--}}

                {{--<div class="blog-item col-md-11">--}}
                    {{--<div class="col-md-6 blog-illustration">--}}
                        {{--<span class="tag-content-desk"><a href="#">Tag</a></span>--}}
                        {{--<a href="/blog-single">--}}
                            {{--<img src="/img/bluecity.jpg" class="blog-illustration-img" alt="">--}}
                        {{--</a>--}}
                    {{--</div>--}}
                    {{--<div class="col-md-6 blog-text">--}}
                        {{--<span class="tag-content-mob"><a href="#">Tag</a></span>--}}
                        {{--<span class="date">25.05.2017</span>--}}
                        {{--<h3 class="blog-heading">Lorem Ipsum для текстов на латинице с разцами</h3>--}}
                        {{--<p class="blog-txt">Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне.--}}
                            {{--Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века. В то--}}
                            {{--время некий безымянный печатник создал большую коллекцию размеров и форм шрифтов, используя--}}
                            {{--Lorem Ipsum для распечатки образцов. Lorem Ipsum не только успешно пережил без заметных--}}
                            {{--изменений пять веков, но и перешагнул в электронный дизайн. Его популяризации в новое время--}}
                            {{--послужили публикация листов Letraset с образцами Lorem Ipsum в 60-х годах и, в более--}}
                            {{--недавнее время, программы электронной вёрстки типа Aldus PageMaker, в шаблонах которых--}}
                            {{--используется Lorem Ipsum.</p>--}}
                        {{--<a href="/blog-single" class="blog-more-link">more <i class="fa fa-long-arrow-right"--}}
                                                                              {{--aria-hidden="true"></i></a>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="blog-item col-md-11">--}}
                    {{--<div class="col-md-6 blog-illustration">--}}
                        {{--<span class="tag-content-desk"><a href="#">Tag</a></span>--}}
                        {{--<a href="/blog-single">--}}
                            {{--<img src="/img/bluecity.jpg" class="blog-illustration-img" alt="">--}}
                        {{--</a>--}}
                    {{--</div>--}}
                    {{--<div class="col-md-6 blog-text">--}}
                        {{--<span class="tag-content-mob"><a href="#">Tag</a></span>--}}
                        {{--<span class="date">25.05.2017</span>--}}
                        {{--<h3 class="blog-heading">Lorem Ipsum для текстов на латинице с разцами</h3>--}}
                        {{--<p class="blog-txt">Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне.--}}
                            {{--Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века. В то--}}
                            {{--время некий безымянный печатник создал большую коллекцию размеров и форм шрифтов, используя--}}
                            {{--Lorem Ipsum для распечатки образцов. Lorem Ipsum не только успешно пережил без заметных--}}
                            {{--изменений пять веков, но и перешагнул в электронный дизайн. Его популяризации в новое время--}}
                            {{--послужили публикация листов Letraset с образцами Lorem Ipsum в 60-х годах и, в более--}}
                            {{--недавнее время, программы электронной вёрстки типа Aldus PageMaker, в шаблонах которых--}}
                            {{--используется Lorem Ipsum.</p>--}}
                        {{--<a href="/blog-single" class="blog-more-link">more <i class="fa fa-long-arrow-right"--}}
                                                                              {{--aria-hidden="true"></i></a>--}}
                    {{--</div>--}}
                {{--</div>--}}

            {{--</div>--}}
        {{--</section>--}}

    </main>

@endsection
