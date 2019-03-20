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
                            <a href="#" class="btn btn-green btn-promo">найти клинику</a>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="clearfix"></div>
        </div>
    </section>

    <section id="about">
        <div class="inner">
            <div class="image"><img src="img/about.jpg" alt="about"></div>
            <div class="text">
                <div class="bt"><span>О компании</span></div>
                <p>Зубно имплантат – это заменитель корня зуба. Он изготавливается из особо прочного, легкого и
                    биологически совместимого с костно тканью материала (титана, циркония или их сплава) и внешне
                    выглядит как небольшой болт. При восста- новлении отсутствующего зуба имплантат хирурги- ческим
                    путем вкручивают в челюстную кость и крепят к нему искусственную зубную коронку.</p>

                <p>Впервые зубной имплантат был установлен человеку еще в 1967 году. С тех пор имплантология ушла
                    вперед настолько, что в наши дни эту процедуру восстановле- ния зубов ежегодно используют свыше 10
                    миллионов человек по всему миру. Уже 20 лет современная имплантология существует и в Латвии.
                    Ежегодно здесь вживляется около 15 тысяч зубных имплантатов.</p>
                <a href="#" class="btn btn-white btn-b">подробнее онас</a>
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

    @if (count($newsPosts))
        <section id="news">
            <div class="inner">
                <div class="bt"><span>Новости</span></div>
                <ul>
                    @foreach ($newsPosts as $post)
                        <li>
                            <div class="wr">
                                <img src="{{ \TCG\Voyager\Facades\Voyager::image($post->image) }}" alt="news">
                                <div class="title"><a href="{{ url("articles/{$post->id}") }}">{{ $post->title }}</a>
                                </div>
                                <div class="excerpt">{{ $post->excerpt }}</div>
                                <a href="{{ url("articles/{$post->id}") }}" class="more"></a>
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
