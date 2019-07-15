@extends('layouts.layout')

@section('title', 'Straumann')

@section('additional_styles')
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
@endsection

@section('additional_scripts')

    <script type="text/javascript" async src="{{ asset('js/scroll_anchor.js') }}"></script>
@endsection

@section('content')

    <section id="promo" class="scroll-anchor">
        <div class="ov"></div>
        <div>
            <div class="slider__promo">

                @foreach ($sliderPosts as $post)
                    <div>
                        <div class="promo-slide">
                            <div
                                    class="promo-slide__background"
                                    style="background-image: url({{ \TCG\Voyager\Facades\Voyager::image($post->image) }});">
                                <div class="ov"></div>
                            </div>
                            <div class="inn inn_promo">
                                <div class="title title_promo"
                                     style="color:{{ $post->text_color ?: 'black' }}">{{ $post->title }}</div>
                                <p class="text_promo"
                                   style="color:{{ $post->text_color ?: 'black' }}">{!! html_entity_decode($post->body) !!}</p>
                                <a href="{{ $post->button_link ? $post->button_link : '/clinics' }}"
                                   class="btn btn-green btn-promo">{{ $post->button_text ? $post->button_text : 'найти клинику' }}</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="clearfix"></div>
        </div>
    </section>

    <section id="about" class="scroll-anchor">
        <div class="inner">
            <div class="image">
                <a target="_blank"
                   href="{!! $role == 'patient' ? setting('site.patient_about_link') : setting('site.doctor_about_link') !!}">
                    <img src="{{ $role == 'patient' ?
                Voyager::image(setting('site.about_section_image_patient')) :
                Voyager::image(setting('site.about.section.image')['about']) }}" alt="about">
                </a>
            </div>
            <div class="text">
                <div class="bt"><span>О компании</span></div>
                {!! $role == 'patient' ? setting('site.about_section_text_patient') : setting('site.about_text') !!}

                <a target="_blank"
                   href="{!! $role == 'patient' ? setting('site.patient_about_link') : setting('site.doctor_about_link') !!}"
                   class="btn btn-white btn-b">Подробнее о нас</a>
            </div>
            <div class="clearfix"></div>
        </div>
    </section>

    @if (count($advantagesPosts))
        @include('main.parts.advantages_posts')
    @endif

    @if (count($severalNews))
        <section id="news" class="scroll-anchor">
            <div class="inner">
                <div class="bt"><span>Новости</span></div>
                <ul>
                    @foreach ($severalNews as $post)
                        <li>
                            <div class="wr">
                                <img src="{{ \TCG\Voyager\Facades\Voyager::image($post->small_image) }}" alt="news">
                                <div class="title"><a href="{{ url("news/{$post->id}") }}">{{ $post->title }}</a>
                                </div>
                                <div class="excerpt">{{ $post->excerpt }}</div>
                                <a href="{{ url("news/{$post->id}") }}" class="more"></a>
                            </div>
                        </li>
                    @endforeach
                </ul>
                <div class="clearfix"></div>
                @if (false)
                    <div class="center"><a href="#" class="btn btn-white btn-b loadMore">Загрузить ещё</a></div>
                @endif
            </div>
        </section>
    @endif

    @include('parts.floating_button')

@stop
