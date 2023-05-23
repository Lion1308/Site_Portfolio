<div {{ $attributes->merge(['class' => 'iframe-wrapper']) }}>
    <a href="{{$url}}" target="_blank">
        <img src="{{ $image ?? null }}" alt="">
    </a>
</div>
