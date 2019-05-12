@extends('layouts.layout')

@section('title', $clinic->name)

@section('content')

    <section id="page__title">
        <div class="inner">
{{--            <div class="breadcrumbs">--}}
{{--                <ul>--}}
{{--                    <li><a href="#">Главная - </a></li>--}}
{{--                    <li>Статьи</li>--}}
{{--                </ul>--}}
{{--            </div>--}}
            <div class="bt"><span>{{ $clinic->name }}</span></div>
            <div class="clearfix"></div>
        </div>
    </section>

    <section id="page">
        <div class="inner">
            <div class="nav">
                @if ($previous)
                    <a href="{{ url("clinics/{$previous}") }}" class="prev">{{ $previousName }}</a>
                @endif
                @if ($next)
                    <a href="{{ url("clinics/{$next}") }}" class="next">{{ $nextName }}</a>
                @endif
                <div class="clearfix"></div>
            </div>
            <div class="inn">
                <div class="clinic-image-wrapper">
                    <img src="{{ \TCG\Voyager\Facades\Voyager::image($clinic->image) }}" alt="clinic">
                </div>
                <div class="text">
                    <div class="title">{{ $clinic->name }}</div>
                    <span> {{ $clinic->description }}</span>

                    <ul>
                        <li>
                            <i class="far fa-envelope" aria-hidden="true"></i>
                            <span class="clinic-text">{{ $clinic->email }}</span>
                        </li>
                        <li>
                            <i class="fas fa-map-marker-alt"></i>
                            <span class="clinic-text">{{ $clinic->address }}</span>
                        </li>
                        <li>
                            <i class="fa fa-globe" aria-hidden="true"></i>
                            <span class="clinic-text"><a href="{{ $clinic->url }}"
                                                         target="_blank"> {{ $clinic->url }}</a></span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </section>

    @if (count($clinic->humans))
        <section id="specialist">
            <div class="inner">
                <div class="bt"><span>CПЕЦИАЛИСТЫ</span></div>

                <ul>
                    @php($i = 0)
                    @foreach ($clinic->humans as $human)
                        <li {{ $i % 3 === 1 ?  'class=centerTab' : ''}}>
                            <img src="{{ \TCG\Voyager\Facades\Voyager::image($human->photo) }}" alt="user">
                            <div class="title">{{ $human->name }}</div>
                            <span>{{ $human->position }}</span>
                            <div class="excerpt">
                                {{ $human->contact }}
                            </div>
                        </li>
                        @php($i++)
                    @endforeach
                </ul>

                <div class="clearfix"></div>
            </div>
        </section>
    @endif

    <div class="inner">
        {!! $clinic->map  !!}
    </div>
@stop