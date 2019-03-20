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
            <div class="custom-select select-city" style="width:300px;">
                <select>
                    <option value="">Все города</option>
                    <option value="0">Все города</option>
                    @foreach ($cities as $city)
                        <option value="{{ $city->id }}">{{ $city->name }}</option>
                    @endforeach
                </select>
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