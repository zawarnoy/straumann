@foreach ($clinics as $clinic)
    <li>
        <div class="wr">
            <img src="{{ \TCG\Voyager\Facades\Voyager::image($clinic->image) }}" alt="clinic">
            <div class="title">{{ $clinic->name }}</div>
            <a href="{{ url("/clinics/{$clinic->id}") }}"></a>
        </div>
    </li>
@endforeach