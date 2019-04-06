<footer>
    {!! setting('site.footer')  !!}
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