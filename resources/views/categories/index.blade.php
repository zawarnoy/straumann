@extends('layouts.layout')

@section('title', 'Библиотека')

@section('content')

    <section id="page__title">
        <div class="inner">
            <div class="bt"><span>Библиотека</span></div>
            <div class="clearfix"></div>
        </div>
    </section>

    <section id="clinics">
        <div class="inner">
            <ul class="list__clinics">
                @foreach ($categories as $category)
                    <li>
                        <div class="wr">
                            <img src="{{ \TCG\Voyager\Facades\Voyager::image($category->image) }}" alt="category">
                            <div class="title">{{ $category->name }}</div>
                            <a href="{{ url("/categories/{$category->slug}") }}"></a>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>

        <div class="clearfix"></div>
    </section>

@endsection