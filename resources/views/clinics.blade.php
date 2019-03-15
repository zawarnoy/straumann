@extends('layouts.layout')

@section('title', 'Title')

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

                @for ($i = 0; $i < 20; $i ++)
                    <li>
                        <div class="wr">
                            <img src="{{ asset('img/clinic.jpg') }}" alt="clinic">
                            <div class="title">SIA SVENATA</div>
                            <a href="#"></a>
                        </div>
                    </li>
                @endfor

            </ul>

            <div class="clearfix"></div>
        </div>
    </section>
@stop