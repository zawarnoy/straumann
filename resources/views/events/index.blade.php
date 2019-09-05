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
                            @foreach($unique_topics as $topic)
                                <span class="filter__option" data-filter-option="{{ $topic }}"><input type="checkbox">{{ $topic }}</span>
                            @endforeach
                        </div>
                    </div>
                    <div class="filters__item filters__selector-container" data-filter-type="country">
                        <div class="filters__text">
                            <div class="filter__title">Страна</div>
                            <div class="filter__subtitle">Все страны</div>
                        </div>
                        <div class="filter__option-list" data-filter-menu="country">
                            @foreach($unique_countries as $country)
                                <span class="filter__option" data-filter-option="{{ $country }}"><input type="checkbox">{{ $country }}</span>
                            @endforeach
                        </div>
                    </div>
                    <div class="filters__item filters__selector-container" data-filter-type="date">
                        <div class="filters__text">
                            <div class="filter__title">Дата</div>
                            <div class="filter__subtitle">Все месяцы</div>
                        </div>
                        <div class="filter__option-list" data-filter-menu="date">
                            @foreach($unique_dates as $unique_date)
                                <span class="filter__option" data-filter-option="{{ $unique_date }}"><input
                                            type="checkbox">{{ $unique_date }}</span>
                            @endforeach
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
                            @foreach($unique_topics as $topic)
                                <span class="filter__option" data-filter-option="{{ $topic }}"><input type="checkbox">{{ $topic }}</span>
                            @endforeach
                        </div>
                    </div>
                    <div class="filters__item filters__item_modal filters__selector-container"
                         data-filter-type="country">
                        <div class="filters__text">
                            <div class="filter__title">Страна</div>
                            <div class="filter__subtitle">Все</div>
                        </div>
                        <div class="filter__option-list" data-filter-menu="country">
                            @foreach($unique_countries as $country)
                                <span class="filter__option" data-filter-option="{{ $country }}"><input type="checkbox">{{ $country }}</span>
                            @endforeach
                        </div>
                    </div>
                    <div class="filters__item filters__item_modal filters__selector-container" data-filter-type="date">
                        <div class="filters__text">
                            <div class="filter__title">Дата</div>
                            <div class="filter__subtitle">Все</div>
                        </div>
                        <div class="filter__option-list" data-filter-menu="date">
                            @foreach($unique_dates as $unique_date)
                                <span class="filter__option" data-filter-option="{{ $unique_date }}"><input
                                            type="checkbox">{{ $unique_date }}</span>
                            @endforeach
                        </div>
                    </div>
                    <div class="filters-modal__close"><span>Закрыть</span></div>
                </div>
            </div>

            <div class="events-block">

                @foreach($events as $event)
                    <div class="event" data-date="{{ $event->date }}" data-country="{{ $event->country }}"
                         data-topic="{{ $event->topic }}">
                        <div class="event-wrapper">
                            <div class="event__preview">
                                <img src="{{ \TCG\Voyager\Facades\Voyager::image($event->image) }}" class="event-img">
                                <div class="event-content">
                                    <a href="{{ $event->link }}" target="_blank"
                                       class="event-title">{{ $event->title }}</a>
                                    <div class="event-short-info">{{ $event->description }}</div>
                                    <div class="event-lector">Лектор <b>{{ $event->lector }}</b></div>
                                </div>
                            </div>
                            <div class="event-right-block">
                                <div class="event-info">
                                    @if ($event->date)
                                        <div class="event-info__item event-info__item_calendar">{{ $event->date }}</div>
                                    @endif

                                    @if ($event->adress)
                                        <div class="event-info__item event-info__item_pin">{{ $event->adress }}</div>
                                    @endif

                                    @if ($event->time)
                                        <div class="event-info__item event-info__item_watches">{{ $event->time }}</div>
                                    @endif

                                    @if($event->persons)
                                        <div class="event-info__item event-info__item_persons">{{ $event->persons }}</div>
                                    @endif

                                    @if($event->price)
                                        <div class="event-info__item event-info__item_money">{{ $event->price }}</div>
                                    @endif
                                </div>
                                <a href="" class="event-btn">зарезервировать место</a>
                            </div>
                        </div>
                    </div>
                @endforeach

                <div id="shadow"></div>
                <div id="emptyState" class="hidden">No events</div>
            </div>

        </section>
    </div>

@endsection