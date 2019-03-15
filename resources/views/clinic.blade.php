@extends('layouts.layout')

@section('title', 'Title')

@section('content')

    <section id="page__title">
        <div class="inner">
            <div class="breadcrumbs">
                <ul>
                    <li><a href="#">Главная - </a></li>
                    <li>Статьи</li>
                </ul>
            </div>
            <div class="bt"><span>Страница клиники</span></div>
            <div class="clearfix"></div>
        </div>
    </section>

    <section id="page">
        <div class="inner">
            <div class="nav">
                <a href="#" class="prev">Atgal į naujienų sąrašą</a>
                <a href="#" class="next">Atgal į naujienų sąrašą</a>
                <div class="clearfix"></div>
            </div>
            <div class="inn">
                <img src="img/clinik.jpg" alt="clinik">
                <div class="text">
                    <div class="title">SIA Dentists</div>
                    <span>SIA Dentists</span>
                    <p class="email"><a href="mailto:dentists-info@inbox.lv">dentists-info@inbox.lv</a></p>
                    <p class="address">Republikas 19, Liepāja</p>
                    <p class="url"><a href="www.siadentists.lv" target="_blank">www.siadentists.lv</a></p>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </section>

    <section id="specialist">
        <div class="inner">
            <div class="bt"><span>CПЕЦИАЛИСТЫ</span></div>

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
@stop