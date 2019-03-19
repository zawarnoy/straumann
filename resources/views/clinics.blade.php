@extends('layouts.layout')

@section('title', 'Клиники')

@section('content')
    <section id="page__title">
        <div class="inner">
            <div class="bt"><span>Клиники</span></div>
            <div class="clearfix"></div>
        </div>
    </section>

    <section id="clinics">
        <div class="inner">
            <div class="select__city">
                <span>Выбрать город</span>
                <ul>
                    <li><a href="#">Москва</a></li>
                    <li><a href="#">Москва</a></li>
                    <li><a href="#">Москва</a></li>
                    <li><a href="#">Москва</a></li>
                    <li><a href="#">Москва</a></li>
                </ul>
            </div>

            <ul class="list__clinics">

                @foreach ($clinics as $clinic)
                    <li>
                        <div class="wr">
                            <img src="{{ \TCG\Voyager\Facades\Voyager::image($clinic->image) }}" alt="clinic">
                            <div class="title">{{ $clinic->name }}</div>
                            <a href="{{ url("/clinics/{$clinic->id}") }}"></a>
                        </div>
                    </li>
                @endforeach

            </ul>

            <div class="clearfix"></div>
        </div>
    </section>
@stop