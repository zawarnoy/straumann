@extends('layouts.layout')

@section('title', 'Title')

@section('content')

    <section id="page__title">
        <div class="inner">
            <div class="breadcrumbs">
                <ul>
                    <li><a href="#">Главная - </a></li>
                    <li>Контакты</li>
                </ul>
            </div>
            <div class="bt"><span>Контакты клиники</span></div>
            <div class="clearfix"></div>
        </div>
    </section>

    <section id="contacts">
        <div class="inner">
            <div class="filters">
                <ul>
                    <li data-tab="tab_1" class="active">VILNIUS</li>
                    <li data-tab="tab_2">KAUNAS</li>
                    <li data-tab="tab_3">RYGA</li>
                </ul>
                <div class="clearfix"></div>
            </div>
            <div class="tab tab_1">
                <div class="text">
                    <div class="title">SIA Dentists</div>
                    <span>SIA Dentists</span>
                    <p class="email"><a href="mailto:dentists-info@inbox.lv">dentists-info@inbox.lv</a></p>
                    <p class="address">Republikas 19, Liepāja</p>
                    <p class="url"><a href="www.siadentists.lv" target="_blank">www.siadentists.lv</a></p>
                </div>
                <div class="text">
                    <div class="title">SIA Dentists</div>
                    <span>SIA Dentists</span>
                    <p class="email"><a href="mailto:dentists-info@inbox.lv">dentists-info@inbox.lv</a></p>
                    <p class="address">Republikas 19, Liepāja</p>
                    <p class="url"><a href="www.siadentists.lv" target="_blank">www.siadentists.lv</a></p>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="clearfix"></div>
        </div>
    </section>

    <section id="specialist">
        <div class="inner">
            <div class="bt"><span>Менеджеры</span></div>

            <ul>
                <li>
                    <img src="img/user.jpg" alt="user">
                    <div class="title">MODRIS ROMANOVSKIS</div>
                    <span>Зубной врач</span>
                    <div class="excerpt">
                        <p>KLĪNIKA: Zobārstniecības centrs “Dentists”</p>
                        <p>TĀLRUNIS: +371 63426444, +371 29264885</p>
                        <p>E-PASTS: dentists-info@inbox.lv</p>
                        <p>WEB: http://siadentists.lv/index.html</p>
                        <p>ADRESE: Ул. Республики, 19, Лиепая, LV-3401</p>
                    </div>
                </li>
                <li>
                    <img src="img/user.jpg" alt="user">
                    <div class="title">MODRIS ROMANOVSKIS</div>
                    <span>Зубной врач</span>
                    <div class="excerpt">
                        <p>KLĪNIKA: Zobārstniecības centrs “Dentists”</p>
                        <p>TĀLRUNIS: +371 63426444, +371 29264885</p>
                        <p>E-PASTS: dentists-info@inbox.lv</p>
                        <p>WEB: http://siadentists.lv/index.html</p>
                        <p>ADRESE: Ул. Республики, 19, Лиепая, LV-3401</p>
                    </div>
                </li>
                <li>
                    <img src="img/user.jpg" alt="user">
                    <div class="title">MODRIS ROMANOVSKIS</div>
                    <span>Зубной врач</span>
                    <div class="excerpt">
                        <p>KLĪNIKA: Zobārstniecības centrs “Dentists”</p>
                        <p>TĀLRUNIS: +371 63426444, +371 29264885</p>
                        <p>E-PASTS: dentists-info@inbox.lv</p>
                        <p>WEB: http://siadentists.lv/index.html</p>
                        <p>ADRESE: Ул. Республики, 19, Лиепая, LV-3401</p>
                    </div>
                </li>
            </ul>

            <div class="clearfix"></div>
        </div>
    </section>

    <section id="map"></section>

@stop