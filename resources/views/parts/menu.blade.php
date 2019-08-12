<div class="logo"><a href="{{ url('/') }}"><img src="{{ asset('img/site_logo.svg') }}" alt="logo"></a></div>
@if ((Route::currentRouteName() !== 'role.choice'))
    <nav>
        <i class="fa fa-bars menu-bar" aria-hidden="true"></i>
        <ul>
            <i class="fa fa-times close-menu hidden" aria-hidden="true"></i>

            <div class="choice-role-block">
                <span class="choice-role-text">{{ request()->cookie('role') == 'patient' ? 'Для стоматологов' : 'Для пациентов' }}</span>
                <i class="fa fa-door-open choice-role-icon" title="Сменить роль"></i>
            </div>
            {!! request()->cookie('role') == 'patient' ? menu('frontend') : menu('frontend_doctor') !!}
        </ul>
    </nav>
@endif