<div class="social-share social-share--size-{{ $size }} social-share--style-{{ $style }}">
    @foreach ($services as $service)
        <a class="social-share-service" style="--color: {{ $service->color }};" href="{{ $service->url() }}" target="_blank" rel="noopener nofollow">
            {!! $service->icon() !!}
        </a>
    @endforeach
</div>
