@extends('layouts.layout')

@section('additional_styles')
    <link rel="stylesheet" href="{{ asset('css/pricing/prostheses.css') }}">
@endsection

@section('content')
    <section class="desc-page">
        <div class="container title-container">
            <a href="{{ route('pricing.index') }}" class="back btn btn-white btn-b"><span>Назад</span></a>
            <h1 class="title">ЦЕНЫ НА ПРОТЕЗИРОВАНИЕ ЗУБОВ</h1>
        </div>
        <div class="full-width-image"
             style="background-image: url(https://straumann.lv/wp-content/uploads/2015/03/Screen-Shot-2015-03-06-at-15.28.21.png);">
        </div>
        <div class="container">
            <p>После того, как зубной имплантат прижился (для имплантатов с поверхностью SLA &#8211; через 6-8
                недель, для имплантатов с поверхностью SLActive &#8211; через 3-4 недели), следует этап
                протезирования зубов. Стоимость протезирования зубов зависит от количества имплантатов, от вида
                протеза, от материала коронки, а также ценовой политики зубной клиники.</p>
            <p>Зубные коронки чаще всего изготавливаются из металлокерамики, прессованной керамики или циркония.
                Но надо иметь введу, что не все материалы подходят для всех видов зубных протезов, так как
                каждый материал имеет свои свойства. Поэтому каждый клинический случай рассматривается
                индивидуально, врач консультирует пациента и разрабатывает индивидуальный план лечения.</p>
        </div>
        <div class="container section_border section_border_first">
            <div class="columned">
                <div class="column-wrapper columned__column_3">
                    <div class="columned__column">
                        <h3 class="columned__header">Металлокерамика</h3>
                        <div class="columned__content">
                            <p>Коронка изготавливается из тонкого слоя металла, который покрыт керамикой.</p>
                            <p>+ долговечная реставрация</p>
                            <p>&#8211; со временем темнеет</p>
                        </div>
                    </div>
                </div>
                <div class="column-wrapper columned__column_3">
                    <div class="columned__column">
                        <h3 class="columned__header">Прессованная керамика</h3>
                        <div class="columned__content">
                            <p>Самый эстетичный и натуральный материал. Зубы выглядят естественно.</p>
                            <p>+ не темнеет со временем</p>
                            <p>&#8211; более хрупкий, чем другие материалы</p>
                        </div>
                    </div>
                </div>
                <div class="column-wrapper columned__column_3 columned__column_last">
                    <div class="columned__column">
                        <h3 class="columned__header">Цирконий</h3>
                        <div class="columned__content">
                            <p>Очень прочный (эквивалентен металлу), но очень белый, поэтому эстетически лучше
                                выглядит, когда покрыт керамикой &#8211; это придает ему естественный вид.</p>
                            <p>Самая дорогая реставрация</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container section_border">
            <div class="title-container section-title-container">
                <h1 class="title">ВОССТАНОВЛЕНИЕ ОДНОГО ЗУБА</h1>
            </div>
            <div class="service-section">
                <div class="service-image"><img
                            src="https://straumann.lv/wp-content/uploads/2016/06/Protezēšanas-cenas.jpg"></div>
                <div class="columned-wrapper">
                    <div class="columned">
                        <div class="column-wrapper columned__column_3">
                            <div class="columned__column">
                                <h3 class="columned__header">Цена металлокерамической реставрации:</h3>
                                <div class="columned__content">
                                    <p>1 имплантат: 550-750 EUR</p>
                                    <p>Коронка: 450-650 EUR</p>
                                    <p><strong>Коронка: 450-650 EUR</strong></p>
                                </div>
                            </div>
                        </div>
                        <div class="column-wrapper columned__column_3">
                            <div class="columned__column">
                                <h3 class="columned__header">Цена реставрации из прессованной керамики:</h3>
                                <div class="columned__content">
                                    <p>1 имплантат: 550-750 EUR</p>
                                    <p>Коронка: 550-750 EUR</p>
                                    <p><strong>Всего: 1100-1500 EUR</strong></p>
                                </div>
                            </div>
                        </div>
                        <div class="column-wrapper columned__column_3 columned__column_last">
                            <div class="columned__column">
                                <h3 class="columned__header">Цена реставрации из цирконий - керамики:</h3>
                                <div class="columned__content">
                                    <p>1 имплантат: 550-750 EUR</p>
                                    <p>Коронка: 650-850 EUR</p>
                                    <p><strong>Всего: 1200-1600 EUR</strong></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a class="learn-more" href="https://straumann.lv/ru/vozhmoznosti-lecheniya/">Узнать больше о
                        возможностях лечения</a>
                </div>
            </div>
        </div>

        <div class="container section_border">
            <div class="title-container section-title-container">
                <h1 class="title">ВОССТАНОВЛЕНИЕ НЕСКОЛЬКИХ ЗУБОВ</h1>
            </div>
            <div class="service-section">
                <div class="service-image"><img src="https://straumann.lv/wp-content/uploads/2016/06/22.png"></div>
                <div class="columned-wrapper">
                    <div class="columned">
                        <div class="column-wrapper columned__column_2">
                            <div class="columned__column">
                                <h3 class="columned__header">Цена металлокерамической реставрации:</h3>
                                <div class="columned__content">
                                    <p>2 имплантата: 1100-1500 EUR</p>
                                    <p>Moст из 3 коронок: 1200-1600 ЕUR</p>
                                    <p><strong>Всего: 2300-3100 EUR</strong></p>
                                </div>
                            </div>
                        </div>
                        <div class="column-wrapper columned__column_2 columned__column_last">
                            <div class="columned__column">
                                <h3 class="columned__header">Цена реставрации из цирконий - керамики:</h3>
                                <div class="columned__content">
                                    <p>2 имплантата: 1100-1500 EUR</p>
                                    <p>Moст из 3 коронок: 1500-1900 EUR</p>
                                    <p><strong>Всего: 2600-3400 EUR</strong></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a class="learn-more" href="https://straumann.lv/ru/vozhmoznosti-lecheniya/">Узнать больше о
                        возможностях лечения</a>
                </div>
            </div>
        </div>

        <div class="container section_border">
            <div class="title-container section-title-container">
                <h1 class="title">ВОССТАНОВЛЕНИЕ ПОЛНОГО РЯДА ЗУБОВ</h1>
            </div>
            <div class="service-section hint">
                Полный ряд зубов может быть восстановлен с помощью съемного протеза, который чаще всего фиксируется
                на 2-4 имплантатах или несъемного протеза, который чаще всего фиксируется на 6-8 имплантатах, но в
                отдельных случаях это возможно и на 4 имплантатах. Для съемного протеза зубы изготавливаются из
                пластмассы. Зубы для несъемного протеза изготавливаются из металлокерамики, цирконий – керамики или
                металлокомпозита.
            </div>
        </div>

        <div class="container section_border">
            <div class="title-container section-title-container">
                <h1 class="title">СЪЕМНЫЙ ПРОТЕЗ</h1>
            </div>
            <div class="service-section">
                <div class="service-image"><img src="https://straumann.lv/wp-content/uploads/2016/06/3.png"></div>
                <div class="columned-wrapper">
                    <div class="columned">
                        <div class="column-wrapper columned__column_2">
                            <div class="columned__column">
                                <h3 class="columned__header">Цена зубного протеза на 2 имплантатах:</h3>
                                <div class="columned__content">
                                    <p>2 имплантата: 1100-1500 EUR</p>
                                    <p>Съемный протез: 1500-1800 ЕUR</p>
                                    <p><strong>Всего: 2600-3300 EUR</strong></p>
                                </div>
                            </div>
                        </div>
                        <div class="column-wrapper columned__column_2 columned__column_last">
                            <div class="columned__column">
                                <h3 class="columned__header">Цена зубного протеза на 4 имплантатах:</h3>
                                <div class="columned__content">
                                    <p>4 имплантата: 2200-3000 EUR</p>
                                    <p>Съемный протез: 2500-2800 ЕUR</p>
                                    <p><strong>Всего: 4700-5800 EUR</strong></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a class="learn-more" href="https://straumann.lv/ru/vozhmoznosti-lecheniya/">Узнать больше о
                        возможностях лечения</a>
                </div>
            </div>
        </div>

        <div class="container section_border">
            <div class="title-container section-title-container">
                <h1 class="title">НЕСЪЕМНЫЙ ПРОТЕЗ</h1>
            </div>
            <div class="service-section">
                <div class="service-image"><img src="https://straumann.lv/wp-content/uploads/2016/06/4.png"></div>
                <div class="columned-wrapper">
                    <div class="columned">
                        <div class="column-wrapper columned__column_2">
                            <div class="columned__column">
                                <h3 class="columned__header">Цена протеза зубов на 6 имплантатах из металлокерамики
                                    (12 зубов):</h3>
                                <div class="columned__content">
                                    <p>6 имплантатов: 3300-4500 EUR</p>
                                    <p>Несъемный протез: 5500-5900 EUR</p>
                                    <p><strong>Всего: 8800-10400 EUR</strong></p>
                                </div>
                            </div>
                        </div>
                        <div class="column-wrapper columned__column_2 columned__column_last">
                            <div class="columned__column">
                                <h3 class="columned__header">Цена протеза зубов на 6 имплантатах из цирконий –
                                    керамики (12 зубов):</h3>
                                <div class="columned__content">
                                    <p>6 имплантатов: 3300-4500 EUR</p>
                                    <p>Несъемный протез: 6500-6900 EUR</p>
                                    <p><strong>Всего: 9800-11400 EUR</strong></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a class="learn-more" href="https://straumann.lv/ru/vozhmoznosti-lecheniya/">Узнать больше о
                        возможностях лечения</a>
                </div>
            </div>
        </div>
    </section>
@endsection