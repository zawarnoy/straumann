@extends('layouts.layout')

@section('title', 'Straumann')

@section('content')

    <section id="promo">
        <div class="ov"></div>
        <div class="inner">
            <div class="slider__promo">

                @foreach ($sliderPosts as $post)
                    <div>
                        <div class="inn inn_promo">
                            <div class="title title_promo">{{ $post->title }}</div>
                            <p class="text_promo">{!! html_entity_decode($post->body) !!}</p>
                            <a href="/clinics" class="btn btn-green btn-promo">найти клинику</a>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="clearfix"></div>
        </div>
    </section>

    <section id="about" style="margin-top: 20px">
        <div class="inner">
            <div class="image"><img src="{{ Voyager::image(setting('site.about.section.image')['about']) }}" alt="about"></div>
            <div class="text">
                <div class="bt"><span>О компании</span></div>
                <p>Швейцарская компания Straumann является крупнейшим мировым производителем зубных имплантатов. Будучи родоначальником зубной имплантологии и имея не один патент, Straumann производит превосходные зубные имплантаты и уже более 40 лет возвращает улыбки миллионам людей по всему миру.</p>

                <p>Компания Straumann сотрудничает более чем со 150 университетами, а надежность имплантатов подтверждена более чем 3000 научными исследованиями.</p>
                <a href="#" class="btn btn-white btn-b">подробнее онас</a>
            </div>
            <div class="clearfix"></div>
        </div>
    </section>

    @if (count($advantagesPosts))
        <section id="advantages" style="margin-top: 20px">
            <div class="inner">

                <div class="bt"><span>преимущества</span></div>
                <ul>
                    @php ($counter = 1)
                    @foreach($advantagesPosts as $post)
                        <li>
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
@stop
