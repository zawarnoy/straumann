<div class="logo"><a href="{{ url('/') }}"><img src="{{ asset('img/site_logo.svg') }}" alt="logo"></a></div>
<nav>
    <i class="fa fa-bars menu-bar" aria-hidden="true"></i>
    <ul>
        {!!  menu('frontend') !!}
        {{--@foreach(menu('frontend', '_json') as $item)--}}
            {{--@php(error_log(print_r(get_object_vars($item), 1), 3,'log.txt'))--}}
            {{--<li><a href="{{ $item->link() }}" class="{{ $item->on() ? 'active' : '' }}">{{ $item->title }}</a></li>--}}
        {{--@endforeach--}}

    </ul>
</nav>