@extends('layouts.layout')

@section('title', $clinic->name)

@section('content')

    <section id="page__title">
        <div class="inner">
            <div class="breadcrumbs">
                <ul>
                    <li><a href="#">Главная - </a></li>
                    <li>Статьи</li>
                </ul>
            </div>
            <div class="bt"><span>{{ $clinic->name }}</span></div>
            <div class="clearfix"></div>
        </div>
    </section>

    <section id="page">
        <div class="inner">
            <div class="nav">
                @if ($previous)
                    <a href="{{ url("clinics/{$previous}") }}" class="prev">Предыдущая</a>
                @endif
                @if ($next)
                    <a href="{{ url("clinics/{$next}") }}" class="next">Следующая</a>
                @endif
                <div class="clearfix"></div>
            </div>
            <div class="inn">
                <img src="{{ \TCG\Voyager\Facades\Voyager::image($clinic->image) }}" alt="clinik">
                <div class="text">
                    <div class="title">{{ $clinic->name }}</div>
                    <span> {{ $clinic->description }}</span>
                    <p class="email">{{ $clinic->email }}</p>
                    <p class="address">{{ $clinic->address }}</p>
                    <p class="url"><a href="{{ $clinic->url }}" target="_blank"> {{ $clinic->url }}</a></p>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </section>

    <div class="inner">
        {!! $clinic->map  !!}
    </div>

    @if (count($clinic->doctors))
        <section id="specialist">
            <div class="inner">
                <div class="bt"><span>CПЕЦИАЛИСТЫ</span></div>

                <ul>
                    @foreach ($clinic->doctors as $doctor)
                        <li>
                            <img src="{{ \TCG\Voyager\Facades\Voyager::image($doctor->photo) }}" alt="user">
                            <div class="title">{{ $doctor->name }}</div>
                            <span>{{ $doctor->position }}</span>
                            <div class="excerpt">
                                {{ $doctor->contact }}
                            </div>
                        </li>
                    @endforeach
                </ul>

                <div class="clearfix"></div>
            </div>
        </section>
    @endif
@stop