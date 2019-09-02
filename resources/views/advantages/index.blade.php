@extends('layouts.layout')

@section('title', 'Straumann')

@section('additional_styles')
    <link rel="stylesheet" href="{{ asset('css/style_advantages.css') }}">
@endsection

@section('content')
    <section class="desc-page lab lab_additional">
        <div class="container title-container">
            <h1 class="title">ПРЕИМУЩЕСТВА</h1>
        </div>
        <div class="full-width-image"
             style="background-image: url(https://straumann.lv/wp-content/uploads/2015/03/Screen-Shot-2015-03-06-at-15.28.21.png);">
        </div>

        @foreach($advantages as $advantage)
            <div class="container">
                <div class="advantage-block">
                    <div class="advantage-media">
                        @if (!empty($advantage->video))
                            <div class="advantage-media-inner">
                                <iframe width="500" height="281"
                                        src="{{ $advantage->video }}"
                                        frameborder="0" gesture="media" allowfullscreen=""></iframe>
                            </div>
                        @else
                            <img class="advantage-media-inner"
                                 src="{{ \TCG\Voyager\Facades\Voyager::image($advantage->image) }}">
                        @endif
                    </div>
                    <div class="advantage-content">
                        <h3 class="advantage-title">
                            {{ $advantage->title }}
                        </h3>
                        <div class="advantage-text">
                            {{ $advantage->content }}
                        </div>
                    </div>
                </div>
            </div>
            <div class="underline {{ $advantage === $advantages->last() ? 'underline-last' : '' }}"></div>
        @endforeach
    </section>
@endsection