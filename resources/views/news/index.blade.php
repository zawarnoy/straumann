@extends('layouts.layout')

@section('title', 'Новости')

@section('content')
    <section id="page__title">
        <div class="inner">
            <div class="bt"><span>Новости</span></div>
            <div class="clearfix"></div>
        </div>
    </section>

    <section id="clinics">
        <div class="inner">
            <ul class="list__clinics">
                @foreach ($severalNews as $news)
                    <li>
                        <div class="wr">
                            <img src="{{ \TCG\Voyager\Facades\Voyager::image($news->small_image) }}" alt="clinic">
                            <div class="title">{{ $news->name }}</div>
                            <a href="{{ url("/news/{$news->id}") }}"></a>
                        </div>
                    </li>
                @endforeach
            </ul>

            <div class="clearfix"></div>
        </div>
    </section>
@stop