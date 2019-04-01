@extends('layouts.layout')

@section('title', 'Возможности лечения')

@section('content')
    <section id="page__title">
        <div class="inner">
            <div class="bt"><span>Возможности лечения</span></div>
            <div class="clearfix"></div>
        </div>
    </section>

    <section id="clinics">
        <div class="inner">
            <ul class="list__clinics">
                @foreach ($posts as $post)
                    <li>
                        <div class="wr">
                            <img src="{{ \TCG\Voyager\Facades\Voyager::image($post->small_image) }}" alt="clinic">
                            <div class="title">{{ $post->title }}</div>
                            <a href="{{ url("/news/{$post->id}") }}"></a>
                        </div>
                    </li>
                @endforeach
            </ul>

            <div class="clearfix"></div>
        </div>
    </section>
@stop