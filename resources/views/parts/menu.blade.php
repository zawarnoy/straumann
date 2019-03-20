<div class="logo"><a href="{{ url('/') }}"><img src="{{ Voyager::image(setting('site.logo')) }}" alt="logo"></a></div>
<nav>
    <a href="#" class="pull"></a>
    <a href="#" class="pull_m"></a>
    <ul>
        {!!  menu('frontend') !!}
    </ul>
</nav>