@extends('layouts.layout')

@section('title', 'Контакты')

@section('content')

    <section id="page__title">
        <div class="inner">
            <div class="breadcrumbs">
                <ul>
                    <li><a href="#">Главная - </a></li>
                    <li>Контакты</li>
                </ul>
            </div>
            <div class="bt"><span>Контакты клиники</span></div>
            <div class="clearfix"></div>
        </div>
    </section>

    <section id="contacts">
        <div class="inner">
            <div class="filters">
                <ul>
                    @foreach($offices as $office)
                        <li data-tab="tab_{{$office->id}}"
                            class="{{ $offices->first()->id == $office->id ? 'active' : ''}}">
                            {{ $office->name }}
                        </li>
                    @endforeach
                </ul>
                <div class="clearfix"></div>
            </div>
            @foreach($offices as $office)
                <div class="tab tab_{{$office->id}}">
                    <div class="text">
                        <div class="title">Реквизиты</div>
                        {!! $office->unp  !!}
                    </div>
                    <div class="text">
                        <div class="title">Контакты</div>
                        {!! $office->contacts !!}
                    </div>
                </div>
            @endforeach
            <div class="clearfix"></div>
        </div>
    </section>

    <section id="specialist">
        <div class="inner">
            <div class="bt"><span>Менеджеры</span></div>
            @foreach($offices as $office)
                <div class="tab tab_{{ $office->id }}">
                    <ul>
                        @php ($i = 0)
                        @foreach ($office->humans as $human)
                            <li {{ $i % 3 == 1 ? 'class=centerTab' : '' }}>
                                <img src="{{ \TCG\Voyager\Facades\Voyager::image($human->photo) }}" alt="user">
                                <div class="title">{{ $human->name }}</div>
                                <span>{{ $human->position }}</span>
                                <div class="excerpt">
                                    <p>{{ $human->contact }}</p>
                                    <p>{{ $human->email }}</p>
                                </div>
                            </li>
                            @php ($i++)
                        @endforeach
                    </ul>
                </div>
            @endforeach
            <div class="clearfix"></div>
        </div>
    </section>

    @foreach ($offices as $office)
        <section class="tab tab_{{$office->id}}">
            {!! $office->map  !!}
        </section>
    @endforeach
@stop