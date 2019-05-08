@if (setting('floating-button.show'))
    <div id="floating-button" data-link="{{ setting('floating-button.link') }}">
        {{setting('floating-button.text')}}
    </div>
@endif