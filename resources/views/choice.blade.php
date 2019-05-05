@extends('layouts.layout')

@section('title', 'Straumann')

@section('content')

    <div id="role-page">
        <div class="text-center title-text choice-headline">
            <h2>Кто вы?</h2>
        </div>

        <div class="choice-role">
            <div class="role-block patient-block">
                <div class="role-block-image"
                     style="background-image: url({{ Voyager::image(setting('choice.patient_image'))}})">
                </div>
            </div>

            <div class="role-block doctor-block">
                <div class="role-block-image"
                     style="background-image: url({{ Voyager::image(setting('choice.doctor_image')) }})">
                </div>
            </div>

        </div>
    </div>
@endsection