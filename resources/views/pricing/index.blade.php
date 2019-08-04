@extends('layouts.layout')

@section('additional_styles')
    <link rel="stylesheet" href="{{ asset('css/pricing/index.css') }}">
@endsection

@section('content')
    <section class="desc-page lab lab_additional">
        <div class="container">
            <h1 class="title">ЦЕНЫ</h1>
        </div>
        <div class="full-width-image"
             style="background-image: url(https://straumann.lv/wp-content/uploads/2015/03/Screen-Shot-2015-03-06-at-15.28.21.png);">
        </div>
        <div class="container">
            <p class="pricing-content">Процесс восстановления потерянного зуба состоит из нескольких этапов – имплантации (хирургический
                этап) и изготовления коронки на имплантат (этап протезирования). Расходы на восстановление зуба
                связаны с затратами на материалы (цена зубного импланта, цена коронки) и от ценовой политики
                зубной клиники, которая в свою очередь зависит от местонахождения клиники, технического
                оборудования, опыта и профессионализма врачей (затраты на оплату труда). Поэтому окончательная
                цена на все процедуры имплантации и протезирования в разных клиниках отличается. Straumann
                советует не экономить за счет своего здоровья, обратить внимание на опыт врача и выбрать
                качественные имплантаты.</p>
        </div>
        <div class="container cols-grid">
            <div class="cols-wrap">
                <div class="col">
                    <div class="image"><img class="attachment-grid-item wp-post-image"
                                            src="https://straumann.lv/wp-content/uploads/2016/06/Implantss1.jpg"
                                            alt="Size_of_an_implant-borne_artifical_tooth" width="270" height="270" /></div>
                    <h2>ЦЕНЫ НА ИМПЛАНТАЦИЮ ЗУБОВ</h2>
                    <p><a href="{{ route('pricing.implants') }}"></a></p>
                    <div class="more">Больше информации &gt;</div>
                </div>
                <div class="col">
                    <div class="image"><img class="attachment-grid-item wp-post-image"
                                            src="https://straumann.lv/wp-content/uploads/2016/06/Protezēšanas-cenas.jpg"
                                            alt="Side_cut_of_titanium_implant" width="270" height="270" /></div>
                    <h2>ЦЕНЫ НА ПРОТЕЗИРОВАНИЕ ЗУБОВ</h2>
                    <p><a href="{{ route('pricing.prostheses') }}"></a></p>
                    <div class="more">Больше информации &gt;</div>
                </div>
            </div>
        </div>
    </section>

@endsection