@extends('layouts.layout')

@section('title', $clinic->name)

@section('content')

    <section id="page__title">
        <div class="inner">
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
                    <a href="{{ $clinic->url ? $clinic->url : '#'  }}" target="_blank">
                        <img src="{{ \TCG\Voyager\Facades\Voyager::image($clinic->image) }}" alt="clinic">
                    </a>
                </div>
                <div class="text">
                    <div class="title">{{ $clinic->name }}</div>
                    <div class="clinic-description">{{ $clinic->description }}</div>

                    <ul>
                        @if($clinic->email)
                            <li>
                                <i class="far fa-envelope" aria-hidden="true"></i>
                                <span class="clinic-text">
                                    <a href="mailto:{{$clinic->email}}">
                                        {{ $clinic->email }}
                                    </a>
                                </span>
                            </li>
                        @endif
                        @if($clinic->address)
                            <li>
                                <i class="fas fa-map-marker-alt"></i>
                                <span class="clinic-text">
                                    <a target="_blank"
                                       href="https://www.google.com/maps/search/{{ $clinic->address }}/">
                                    {{ $clinic->address }}
                                    </a>
                                </span>
                            </li>
                        @endif
                        @if($clinic->url)
                            <li>
                                <i class="fa fa-globe" aria-hidden="true"></i>
                                <span class="clinic-text"><a href="#"
                                                             > {{ strpos($clinic->url, 'http') === false ? $clinic->url }}</a></span>
                            </li>
                        @endif
                        @if($clinic->phone)
                            <li>
                                <i class="fa fa-phone" aria-hidden="true"></i>
                                <span class="clinic-text">
                                    <a href="tel:{{$clinic->phone}}">
                                    {{ $clinic->phone }}
                                    </a>
                                </span>
                            </li>
                        @endif
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