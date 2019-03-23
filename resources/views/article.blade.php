@extends('layouts.layout')

@section('title', 'Title')

@section('content')

    <section id="page__title">
        <div class="inner">
            <div class="breadcrumbs">
                <ul>
                    <li><a href="#">Главная - </a></li>
                    <li>Статьи</li>
                </ul>
            </div>
            <div class="bt"><span>{{ $post->title }}</span></div>
            <div class="clearfix"></div>
        </div>
    </section>

    <section id="content">

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
                @if ($previous)
                    <a href="{{ url("articles/{$previous}") }}" class="prev">Предыдущая</a>
                @endif
                @if ($next)
                    <a href="{{ url("articles/{$next}") }}" class="next">Следующая</a>
                @endif
            </div>
            <div class="actions">

                <div class="share">
                    <span>Соц. сети:</span>
                    <ul>
                        <li><a href="#" target="_blank"><img src="{{ asset('img/facebook.png') }}" alt="facebook"></a>
                        </li>
                        <li><a href="#" target="_blank"><img src="{{ asset('img/instagram.png') }}" alt="instagram"></a>
                        </li>
                    </ul>
                </div>
                <div class="clearfix"></div>
            </div>

            <div class="clearfix"></div>
        </div>
    </section>

@stop