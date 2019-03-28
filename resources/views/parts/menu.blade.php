<div class="logo"><a href="{{ url('/') }}"><img src="{{ asset('img/site_logo.svg') }}" alt="logo"></a></div>
<nav>
    <i class="fa fa-bars menu-bar" aria-hidden="true"></i>
    {{--<a href="#" class="pull_m"></a>--}}
    <ul>
        {!!  menu('frontend') !!}
    </ul>
</nav>