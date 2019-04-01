@extends('layouts.layout')

@section('title', 'Цены')

@section('content')
    <section id="page__title">
        <div class="inner">
            <div class="bt"><span>Цены</span></div>
            <div class="clearfix"></div>
        </div>
    </section>

    <section id="content">
        <div class="inner">
            <div class="text">
                {!! setting('pricing.content') !!}
                <div class="clearfix"></div>
            </div>
        </div>
    </section>
@stop