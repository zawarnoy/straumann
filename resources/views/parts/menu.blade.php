<div class="logo"><a href="{{ url('/') }}"><img src="{{ asset('img/site_logo.svg') }}" alt="logo"></a></div>
@if ((Route::currentRouteName() !== 'role.choice'))
    <nav>
        <i class="fa fa-bars menu-bar" aria-hidden="true"></i>
        <ul>
            <i class="fa fa-times close-menu hidden" aria-hidden="true"></i>
            <i class="fas fa-sign-out-alt choice-role-icon" title="Сменить роль"></i>
            {!!  menu('frontend') !!}
        </ul>
    </nav>
@endif