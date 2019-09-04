@extends('layouts.layout')

@section('title', 'Straumann')

@section('additional_styles')
    <link rel="stylesheet" href="{{ asset('css/style_events.css') }}">
@endsection

@section('additional_scripts')
    <script src="{{ asset('js/module-events.js') }}"></script>
@endsection

@section('content')

    <div class="wrapper">
        <section class="desc-page lab lab_additional">
            <div class="banner">
                <div class="banner__text">
                    <div class="banner__title">КАЛЕНДАРЬ<br>ОБУЧЕНИЯ</div>
                    <div class="banner__subtitle">Квалификационные курсы, семинары, конференции</div>
                </div>
            </div>

            <div id="filters" class="filters">
                <div class="filters__wrapper">
                    <div class="filters__item filter__placeholder filter__title">Фильтры</div>
                    <div class="filters__item filters__selector-container" data-filter-type="topic">
                        <div class="filters__text">
                            <div class="filter__title">Тема</div>
                            <div class="filter__subtitle">Все темы</div>
                        </div>
                        <div class="filter__option-list" data-filter-menu="topic">
                            <span class="filter__option" data-filter-option="1"><input type="checkbox">topic 1</span>
                            <span class="filter__option" data-filter-option="2"><input type="checkbox">topic 2</span>
                            <span class="filter__option" data-filter-option="3"><input type="checkbox">topic 3</span>
                        </div>
                    </div>
                    <div class="filters__item filters__selector-container" data-filter-type="country">
                        <div class="filters__text">
                            <div class="filter__title">Страна</div>
                            <div class="filter__subtitle">Все семинары</div>
                        </div>
                        <div class="filter__option-list" data-filter-menu="country">
                            <span class="filter__option" data-filter-option="1"><input type="checkbox">country 1</span>
                            <span class="filter__option" data-filter-option="2"><input type="checkbox">country 2</span>
                            <span class="filter__option" data-filter-option="3"><input type="checkbox">country 3</span>
                        </div>
                    </div>
                    <div class="filters__item filters__selector-container" data-filter-type="date">
                        <div class="filters__text">
                            <div class="filter__title">Дата</div>
                            <div class="filter__subtitle">Все месяцы</div>
                        </div>
                        <div class="filter__option-list" data-filter-menu="date">
                            <span class="filter__option" data-filter-option="1"><input type="checkbox">date 1</span>
                            <span class="filter__option" data-filter-option="2"><input type="checkbox">date 2</span>
                            <span class="filter__option" data-filter-option="3"><input type="checkbox">date 3</span>
                        </div>
                    </div>
                </div>
            </div>

            <div id="filters-modal">
                <div class="filters-modal__wrapper">
                    <div class="filters__item filters__item_modal filter__placeholder filter__title">Фильтры</div>
                    <div class="filters__item filters__item_modal filters__selector-container" data-filter-type="topic">
                        <div class="filters__text">
                            <div class="filter__title">Тема</div>
                            <div class="filter__subtitle">Все темы</div>
                        </div>
                        <div class="filter__option-list" data-filter-menu="topic">
                            <span class="filter__option" data-filter-option="1"><input type="checkbox">topic 1</span>
                            <span class="filter__option" data-filter-option="2"><input type="checkbox">topic 2</span>
                            <span class="filter__option" data-filter-option="3"><input type="checkbox">topic 3</span>
                        </div>
                    </div>
                    <div class="filters__item filters__item_modal filters__selector-container" data-filter-type="country">
                        <div class="filters__text">
                            <div class="filter__title">Страна</div>
                            <div class="filter__subtitle">Все семинары</div>
                        </div>
                        <div class="filter__option-list" data-filter-menu="country">
                            <span class="filter__option" data-filter-option="1"><input type="checkbox">country 1</span>
                            <span class="filter__option" data-filter-option="2"><input type="checkbox">country 2</span>
                            <span class="filter__option" data-filter-option="3"><input type="checkbox">country 3</span>
                        </div>
                    </div>
                    <div class="filters__item filters__item_modal filters__selector-container" data-filter-type="date">
                        <div class="filters__text">
                            <div class="filter__title">Дата</div>
                            <div class="filter__subtitle">Все месяцы</div>
                        </div>
                        <div class="filter__option-list" data-filter-menu="date">
                            <span class="filter__option" data-filter-option="1"><input type="checkbox">date 1</span>
                            <span class="filter__option" data-filter-option="2"><input type="checkbox">date 2</span>
                            <span class="filter__option" data-filter-option="3"><input type="checkbox">date 3</span>
                        </div>
                    </div>
                    <div class="filters-modal__close"><span>Закрыть</span></div>
                </div>
            </div>

            <div class="events-block">
                <div class="event" data-topic="1;2">
                    <div class="event-wrapper">
                        <div class="event__preview">
                            <img src="https://www.medgrupe.lt/assets/Uploads/Lecturers/db384dffb0/lektorius-1-algirdas-puisys-1920x1534.jpg" class="event-img">
                            <div class="event-content">
                                <a href="#" class="event-title">Мягкие ткани рта.<br>Имплантация в эстетической зоне.</a>
                                <div class="event-short-info">Регулируемые 2-дневные теоретико-практические курсы</div>
                                <div class="event-lector">Lectorius <b>Dr. Algirdas Puišys</b></div>
                            </div>
                        </div>
                        <div class="event-right-block">
                            <div class="event-info">
                                <div class="event-info__item event-info__item_pin">Vilniaus implantologijos centras (Polocko g. 21, Vilnius)</div>
                                <div class="event-info__item event-info__item_calendar">2019 m. rugsėjo 5 - 6 d.</div>
                                <div class="event-info__item event-info__item_watches">9.00-17.00 val.</div>
                                <div class="event-info__item event-info__item_text">Rusų kalba</div>
                                <div class="event-info__item event-info__item_persons">16 dalyvių/vietų</div>
                                <div class="event-info__item event-info__item_money">1600 EUR</div>
                            </div>
                            <a href="#" class="event-btn">зарезервировать место</a>
                        </div>
                    </div>
                </div>

                <div class="event" data-topic="1" data-date="3">
                    <div class="event-wrapper">
                        <div class="event__preview">
                            <img src="https://www.medgrupe.lt/assets/Uploads/Seminars/1c9f40a723/dr-nazar.jpg" class="event-img">
                            <div class="event-content">
                                <a href="#" class="event-title">Аналоговая и цифровая стоматология</a>
                                <div class="event-short-info">Однодневный теоретический курс</div>
                                <div class="event-lector">Lectorius <b>Dr. Nazariy Mykhaylyuk</b></div>
                            </div>
                        </div>
                        <div class="event-right-block">
                            <div class="event-info">
                                <div class="event-info__item event-info__item_pin">Viešbutis NOVOTEL (Gedimino pr. 16, Vilnius)</div>
                                <div class="event-info__item event-info__item_calendar">2019 m. rugsėjo 7 d.</div>
                                <div class="event-info__item event-info__item_watches">10.00-18.00 val.</div>
                                <div class="event-info__item event-info__item_text">Anglų kalba</div>
                                <div class="event-info__item event-info__item_money">350 EUR</div>
                            </div>
                            <a href="#" class="event-btn">зарезервировать место</a>
                        </div>
                    </div>
                </div>

                <div id="shadow"></div>
                <div id="emptyState" class="hidden">No events</div>
            </div>

        </section>
    </div>

@endsection