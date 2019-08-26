<!DOCTYPE HTML>

<html lang="ru">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <title>Straumann</title>

    <link
            href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&amp;subset=cyrillic,cyrillic-ext,latin-ext"
            rel="stylesheet">
    <link href="{{ asset('css/style_main.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/cookie_panel.css') }}">
    <link rel="stylesheet" href="{{ asset('css/menu_buttons.css') }}">
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
          integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
</head>

<body>
<div class="stub"></div>
<header class="scroll-anchor">
    <div class="inner">
        @include('parts.menu')
        <div class="clearfix"></div>
    </div>
</header>
<div class="content">

    <script>
        window.onload = () => {
            $('#promoFade').fadeIn(1000);
            $('#fadePlaceholder').hide();
        }
    </script>

    <div id="fadePlaceholder" style="display: block; width: 100vw; height: 100vh;"></div>

    <section id="promoFade" style="display: none">
    <section id="promo" class="scroll-anchor" data-hash="slider">
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

    <section id="about" class="scroll-anchor" data-hash="about">
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

    <section id="advantages" class="scroll-anchor" data-hash="advantages">
        <div class="advantages__flex-item advantages__flex-item_menu">
            <ul class="advantage__menu">
                @php($counter = 0)
                @foreach($advantagesPosts as $advantage)
                    <li class="menu__item {{ !$counter ? 'menu__item_active' : '' }}"
                        data-advantage-code="{{ $counter }}">{{ $advantage->title }}</li>
                    @php($counter++)
                @endforeach
            </ul>
        </div>

        @php($counter = 0)
        <div data-advantages style="display: none;">
            @foreach($advantagesPosts as $advantage)
                <div data-advantage-code="{{ $counter }}">
                    <h3>{{ $advantage->preview_title }}</h3>
                    <p>{{ $advantage->preview_description }}</p>
                    <span data-background-src>{{ Voyager::image($advantage->preview_image) }}</span>
                    <span data-button-href>{{ url("advantages/{$advantage->id}") }}</span>
                </div>
                @php($counter++)
            @endforeach
        </div>

        <div class="advantages__flex-item advantages__flex-item_content">
            <div class="advantage__content">
                <div class="advantage__content-wrapper">
                    <div data-is-fading class="advantage__text-wrapper">
                        <h3 class="advantage__header"></h3>
                        <p class="advantage__text"></p>
                        <a class="btn btn-white btn-b advantage__button" href="#">Подробнее</a>
                    </div>
                </div>
            </div>
            <div class="advantage__controls">
                <div class="controls__line"></div>
                <div class="controls__arrows">
                    <img class="controls__arrow controls__arrow_prev" data-role="prev"
                         src="{{ asset('img/advantages_arrow.svg') }}">
                    <img class="controls__arrow controls__arrow_next" data-role="next"
                         src="{{ asset('img/advantages_arrow.svg') }}">
                </div>
            </div>
        </div>
        <img data-is-fading class="advantage__background" src="">
    </section>

    @if (count($severalNews))
        <section id="news" class="scroll-anchor" data-hash="news">
            <div class="inner">
                <div class="bt"><span>Новости</span></div>
                <ul>
                    @foreach ($severalNews as $post)
                        <li>
                            <div class="wr">
                                <div class="img-wrapper">
                                    <img src="{{ \TCG\Voyager\Facades\Voyager::image($post->small_image) }}" alt="news">
                                </div>
                                <div class="title">
                                    <a href="{{ url("news/{$post->id}") }}">{{ $post->title }}</a>
                                </div>
                                <a href="{{ url("news/{$post->id}") }}" class="more"></a>
                            </div>
                        </li>
                    @endforeach
                </ul>
                <div class="clearfix"></div>
            </div>
        </section>
    @endif

{{--    <section id="events" class="scroll-anchor" data-hash="events">--}}
{{--        <div class="advantages__flex-item advantages__flex-item_menu">--}}
{{--            <ul class="advantage__menu">--}}
{{--                <li class="menu__item menu__item_active"--}}
{{--                    data-event-code="0">Мероприятия</li>--}}
{{--            </ul>--}}
{{--        </div>--}}

{{--        <div data-events style="display: none;">--}}
{{--                <div data-event-code="0">--}}
{{--                    <h3>Тайтл</h3>--}}
{{--                    <p>Описание</p>--}}
{{--                    <span data-background-src></span>--}}
{{--                    <span data-button-href></span>--}}
{{--                </div>--}}
{{--        </div>--}}

{{--        <div class="advantages__flex-item advantages__flex-item_content">--}}
{{--            <div class="advantage__content">--}}
{{--                <div class="advantage__content-wrapper">--}}
{{--                    <div data-is-fading class="advantage__text-wrapper">--}}
{{--                        <h3 class="advantage__header"></h3>--}}
{{--                        <p class="advantage__text"></p>--}}
{{--                        <a class="btn btn-white btn-b advantage__button" href="#">Подробнее</a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="advantage__controls">--}}
{{--                <div class="controls__line"></div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <img data-is-fading class="advantage__background" src="">--}}
{{--    </section>--}}



</div>

<footer class="scroll-anchor">
    <div class="inner">
        <div class="coll center">
            <span>Эксклюзивный дистрибьютор STRAUMANN в Беларуси </span>
            <span><a href="tel:+375291105533">
                        <i class="fas fa-phone"></i> +375 (29) 110 55 33</a></span>
            <span><a href="mailto:info@straumann.by">
                    <i class="far fa-envelope" aria-hidden="true"></i> info@straumann.by</a></span>
        </div>
        <div class="clearfix"></div>
    </div>
</footer>

<div id="thanks" class="box__modal">
    <div class="inn">
        <div class="bt">Спасибо за Ваше обращение!</div>
        <p>Заявка отправлена.<br> Мы свяжемся с Вами в ближайшее время.</p>
    </div>
</div>

<div class="fab">
        <span class="fab-action-button">
            <i class="fab-action-button__icon"></i>
        </span>
    <ul class="fab-buttons">
        <li class="fab-buttons__item">
            <a href="#" class="fab-buttons__link" data-tooltip="Facebook">
                <i class="icon-material icon-material_fb"></i>
            </a>
        </li>
        <li class="fab-buttons__item">
            <a href="#" class="fab-buttons__link" data-tooltip="Twitter">
                <i class="icon-material icon-material_tw"></i>
            </a>
        </li>
        <li class="fab-buttons__item">
            <a href="#" class="fab-buttons__link" data-tooltip="Linkedin">
                <i class="icon-material icon-material_li"></i>
            </a>
        </li>
        <li class="fab-buttons__item">
            <a href="#" class="fab-buttons__link" data-tooltip="Google+">
                <i class="icon-material icon-material_gp"></i>
            </a>
        </li>
    </ul>
</div>

<div id="feedback" class="box__modal">
    <div class="inn">
        <div class="bt">Заказать звонок</div>
        <div class="form">
            <form action="javascript:void(null);" method="post" id="form_callback"
                  onsubmit="sendForm('form_callback');">
                <input type="text" name="name" required="" placeholder="Ваше имя">
                <input type="email" name="email" required="" placeholder="E-mail">
                <input type="tel" name="phone" required="" class="i_phone" placeholder="Телефон">
                <input type="hidden" name="subject" value="Обратный звонок">
                <input type="submit" value="Заказать звонок" class="btn btn-green">
            </form>
        </div>
    </div>
</div>
@if (Cookie::get('role') && empty(Cookie::get('accept_cookies')))
    @include('parts.cookie_panel')
@endif

<script type="text/javascript"
        src="https://maps.google.com/maps/api/js?sensor=false&amp;language=ru&amp;key=AIzaSyDCmaW-bZ1w8Zw96ZypHS7gSCXxI1oI12Q"></script>
<script type="text/javascript" src="{{ asset('js/jquery.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/jquery-ui.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/jquery.touchSwipe.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/jquery.fancybox.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/wow.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/slick.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/jquery.maskedinput.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/jquery.maskedinput.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/main.js') }}"></script>
<script type="text/javascript" async src="{{ asset('js/scroll_anchor.js') }}"></script>
</body>

</html>