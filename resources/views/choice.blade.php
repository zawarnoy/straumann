@extends('layouts.layout')

@section('title', 'Straumann')

@section('additional_styles')
    <link rel="stylesheet" href="{{ asset('css/choice.css') }}">
@endsection

@section('content')

    <div id="role-page">

        <div class="choice-role">
            <div class="role-block patient-block">
                <div class="role-block-image"
                     style="background-image: url({{ Voyager::image(setting('choice.patient_image'))}})">
                    <div class="choice-button float-right">{{ setting('choice.text_for_patients') }}</div>
                </div>
            </div>

            <div class="role-block doctor-block">
                <div class="role-block-image"
                     style="background-image: url({{ Voyager::image(setting('choice.doctor_image')) }})">
                    <div class="choice-button float-left">{{ setting('choice.text_for_doctors') }}</div>
                </div>
            </div>
        </div>
    </div>
@endsection