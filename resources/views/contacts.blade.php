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
                    <li data-tab="tab_1" class="active">МИНСК</li>
                    <li data-tab="tab_2">KAUNAS</li>
                    <li data-tab="tab_3">RYGA</li>
                </ul>
                <div class="clearfix"></div>
            </div>
            <div class="tab tab_1">
                <div class="text">
                    <div class="title">ООО "Мед Дентал группа"</div>
                    <span>SIA Dentists</span>
                    <p>УНП 193193886</p>
                    <p>220100, г.Минск, ул Сурганова 61, помещение 33</p>
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
                    <img src="img/arunas-juzenas__FillWzM0MCwyMjBd.png" alt="user">
                    <div class="title">Арунас Юзенас</div>
                    <span>Директор</span>
                    <div class="excerpt">
                        <p>ТЕЛ: +371 63426444, +371 29264885</p>
                        <p>E-MAIL: arunas@medgrupe.lt</p>
                    </div>
                </li>
                <li>
                    <img src="img/roman-kurchik__FillWzM0MCwyMjBd.png" alt="user">
                    <div class="title">Курчик Роман</div>
                    <span>Менеджер</span>
                    <div class="excerpt">
                        <p>ТЕЛ: +375 29 761 9669</p>
                        <p>E-MAIL: roman@straumann.by</p>
                    </div>
                </li>
                <li>
                    <img src="img/olga-stugareva__FillWzM0MCwyMjBd.png" alt="user">
                    <div class="title">Стугарева Ольга</div>
                    <span>Менеджер</span>
                    <div class="excerpt">
                        <p>ТЕЛ: +371 63426444, +371 29264885</p>
                        <p>E-MAIL: olga@straumann.by</p>
                    </div>
                </li>
            </ul>

            <div class="clearfix"></div>
        </div>
    </section>

    <section id="map"></section>

@stop