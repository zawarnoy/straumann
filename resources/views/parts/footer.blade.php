<footer>
    <div class="inner">
        <div class="coll">
            <div class="title">Возможности лечения</div>
            <ul>
                <li><a href="#">Когда нехватает всех зубов</a></li>
                <li><a href="#">Когда нехватает нескольких зубов</a></li>
                <li><a href="#">Когда нехватает одного зуба</a></li>
                <li><a href="#">Протезы или имплантаты</a></li>
            </ul>
            <ul>
                <li><a href="#">Преимущества</a></li>
                <li><a href="#">О имплантатах</a></li>
                <li><a href="#">Возможности лечения</a></li>
                <li><a href="#">Новости</a></li>
                <li><a href="#">Клиники</a></li>
                <li><a href="#">Цены</a></li>
            </ul>
        </div>
        <div class="coll coll__ct">
            <div class="title">Контакты</div>
            <p>Представители STRAUMANN в Латвии</p>
            <p>Tел.: Клиники</p>
            <p>Eл.п.: info@straumann.lv</p>
            <a href="#feedback" class="btn btn-white open__modal">Написать нам</a>
        </div>
        <div class="clearfix"></div>
    </div>
</footer>

<div id="thanks" class="box__modal">
    <div class="inn">
        <div class="bt">Спасибо за Ваше обращение!</div>
        <p>Заявка отправлена.<br> Мы свяжемся с Вами в ближайшее время.</p>
    </div>
</div>

<div id="feedback" class="box__modal">
    <div class="inn">
        <div class="bt">Заказать звонок</div>
        <div class="form">
            <form action="javascript:void(null);" method="post" id="form_callback"
                  onsubmit="sendForm('form_callback');">
                <input type="text" name="name" required="" placeholder="Ваше имя">
                <input type="email" name="email" required="" placeholder="E-mail">
                <input type="tel" name="phone" required="" class="i_phone" placeholder="Телефон">
                <input type="hidden" name="subject" value="Обратный звонок">
                <input type="submit" value="Заказать звонок" class="btn btn-green">
            </form>
        </div>
    </div>
</div>