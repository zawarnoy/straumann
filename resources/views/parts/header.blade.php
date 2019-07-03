<header class="scroll-anchor">
    <div class="inner">
        @include('parts.menu')
        @if (setting('site.show_button_request_call'))
            <div class="callback"><a href="#feedback" class="btn btn-white open__modal">Заказать звонок</a></div>
        @endif
        <div class="clearfix"></div>
    </div>
</header>