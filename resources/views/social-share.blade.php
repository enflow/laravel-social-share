<div class="social-share social-share--size-{{ $size }} social-share--style-{{ $style }} {{ $class }}">
    @foreach ($services as $service)
        <a class="social-share-service" style="--color: {{ $service->color }};" href="{{ $service->url() }}" target="_blank" rel="noopener nofollow" title="{{ $service->label }}">
            {!! $service->icon() !!}
        </a>
    @endforeach
</div>
