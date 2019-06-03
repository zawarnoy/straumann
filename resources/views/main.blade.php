@extends('layouts.layout')

@section('title', 'Straumann')

@section('content')

    <section id="promo">
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
                                <div class="title title_promo">{{ $post->title }}</div>
                                <p class="text_promo">{!! html_entity_decode($post->body) !!}</p>
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

    <section id="about">
        <div class="inner">
            <div class="image"><img src="{{ Voyager::image(setting('site.about.section.image')['about']) }}"
                                    alt="about"></div>
            <div class="text">
                <div class="bt"><span>О компании</span></div>
                {!! setting('site.about_text') !!}

                <a href="{{ route('about.index') }}" class="btn btn-white btn-b">Подробнее о нас</a>
            </div>
            <div class="clearfix"></div>
        </div>
    </section>

    @if (count($advantagesPosts))
        <section id="advantages">
            <div class="inner">

                <div class="bt"><span>преимущества</span></div>
                <ul>
                    @php ($counter = 1)
                    @foreach($advantagesPosts as $post)
                        <li style='background-image: {{ $post->background_image ? 'url(storage/' . json_decode($post->background_image)[0]->download_link . ')' : ''}}'>
                            <span>{{ $counter }}</span>
                            <p>{{ $post->excerpt }}</p>
                            <a href="{{ url("advantages/{$post->id}") }}"><i></i></a>
                        </li>
                        @php ($counter++)
                    @endforeach
                </ul>
                <div class="clearfix"></div>
            </div>
        </section>
    @endif

    @if (count($severalNews))
        <section id="news">
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
