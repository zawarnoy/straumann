@extends('layouts.layout')

@section('title', $post->title)
@section('additional_styles')
    <link rel="stylesheet" href="{{ asset('css/posts.css') }}">
@endsection

@section('content')

    <section id="page__title">
        <div class="inner">
            <div class="bt"><span>{{ $post->title }}</span></div>
            <div class="clearfix"></div>
        </div>
    </section>

    <section id="content" class="post-content">
        @if (!empty($post->show_image) && $post->image)
            <div class="thumbnail">
                <img src="{{ \TCG\Voyager\Facades\Voyager::image($post->image) }}" alt="content">
            </div>
        @endif
        <div class="inner">
            <div class="text">

                {!!  $post->body !!}

                <div class="clearfix"></div>
            </div>
            <div class="nav">
                @if (!empty($previous))
                    <a href="{{ url($previous) }}" class="prev">Предыдущая</a>
                @endif
                @if (!empty($next))
                    <a href="{{ url($next) }}" class="next">Следующая</a>
                @endif
            </div>
            <div class="actions">

{{--                <div class="share">--}}
{{--                    <span>Соц. сети:</span>--}}
{{--                    <ul>--}}
{{--                        <li><a href="#" target="_blank"><img src="{{ asset('img/facebook.png') }}" alt="facebook"></a>--}}
{{--                        </li>--}}
{{--                        <li><a href="#" target="_blank"><img src="{{ asset('img/instagram.png') }}" alt="instagram"></a>--}}
{{--                        </li>--}}
{{--                    </ul>--}}
{{--                </div>--}}
{{--                <div class="clearfix"></div>--}}
            </div>

            <div class="clearfix"></div>
        </div>
    </section>

@stop