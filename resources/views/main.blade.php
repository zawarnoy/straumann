@extends('layouts.layout')

@section('title', 'Title')

@section('content')

    <section id="promo">
        <div class="ov"></div>
        <div class="inner">
            <div class="slider__promo">

                @for ($i = 0; $i < 5; $i++)
                    <div>
                        <div class="inn inn_promo">
                            <div class="title title_promo">Улыбка, которая Вас окрыляет</div>
                            <p class="text_promo">Straumann – no{{ $i }} выбор пациентов и врачеи по всему миру</p>
                            <a href="#" class="btn btn-green btn-promo">найти клинику</a>
                        </div>
                    </div>
                @endfor
            </div>
            <div class="clearfix"></div>
        </div>
    </section>

    <section id="about">
        <div class="inner">
            <div class="image"><img src="img/about.jpg" alt="about"></div>
            <div class="text">
                <div class="bt"><span>О компании</span></div>
                <p>Зубно имплантат – это заменитель корня зуба. Он изготавливается из особо прочного, легкого и
                    биологически совместимого с костно тканью материала (титана, циркония или их сплава) и внешне
                    выглядит как небольшой болт. При восста- новлении отсутствующего зуба имплантат хирурги- ческим
                    путем вкручивают в челюстную кость и крепят к нему искусственную зубную коронку.</p>

                <p>Впервые зубной имплантат был установлен человеку еще в 1967 году. С тех пор имплантология ушла
                    вперед настолько, что в наши дни эту процедуру восстановле- ния зубов ежегодно используют свыше 10
                    миллионов человек по всему миру. Уже 20 лет современная имплантология существует и в Латвии.
                    Ежегодно здесь вживляется около 15 тысяч зубных имплантатов.</p>
                <a href="#" class="btn btn-white btn-b">подробнее онас</a>
            </div>
            <div class="clearfix"></div>
        </div>
    </section>

    <section id="advantages">
        <div class="inner">
            <div class="bt"><span>преимущества</span></div>
            <ul>
                <li>
                    <span>1</span>
                    <p>STRAUMANN: No 1. выбор пациентов<br> и врачей по всему миру</p>
                    <i></i>
                </li>
                <li>
                    <span>2</span>
                    <p>Самые высокие показатели <br>приживаемости</p>
                    <i></i>
                </li>
                <li>
                    <span>3</span>
                    <p>Уникальный сплав <br>– Roxolid</p>
                    <i></i>
                </li>
                <li>
                    <span>4</span>
                    <p>Уникальная поверхность имплантата <br>– SLActive</p>
                    <i></i>
                </li>
                <li>
                    <span>5</span>
                    <p>Производитель, которому <br>можно доверять</p>
                    <i></i>
                </li>
                <li>
                    <span>6</span>
                    <p>Международное обязательство <br>на всю жизнь</p>
                    <i></i>
                </li>
            </ul>
            <div class="clearfix"></div>
        </div>
    </section>

    <section id="news">
        <div class="inner">
            <div class="bt"><span>Новости</span></div>
            <ul>

                <!-- NEWS BLOCK !-->

                @for ($i = 0; $i < 3; $i++)
                    <li>
                        <div class="wr">
                            <img src="img/news.jpg" alt="news">
                            <div class="title"><a href="#">Др.гиртс шалмс о том, почему зуб должен быть восстановлен как
                                    можно скорее</a></div>
                            <div class="excerpt">RSU Stomatoloģijas institūta Mutes, sejas un žokļu ķirurgs un klīnikas
                                virsārsts Ģirts Šalms stāsta, kāpēc ir tik svarīgi pēc iespējas ātrāk aizstāt zaudētus
                                zobus
                                un kas notiek, ja tas netiek darīts.
                            </div>
                            <a href="#" class="more"></a>
                        </div>
                    </li>
                @endfor
            </ul>
            <div class="clearfix"></div>
            <div class="center"><a href="#" class="btn btn-white btn-b">Все новости</a></div>
        </div>
    </section>
@stop
