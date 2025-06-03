@props([
    'src' => null,
    'srcType' => 'webp',
    'fallback' => null,
    'fallbackType' => 'png',
    'srcMobile' => null,
    'srcMobileType' => 'webp',
    'fallbackMobile' => null,
    'fallbackMobileType' => 'png',
    'pictureClass' => null,
    'imgClass' => null,
    'alt' => null,
    'loading' => true,
    'desktopSize' => '1024px',
    'mobileSize' => '1023px'
])
<picture class="{{ $pictureClass }}">
    {{-- Desktop Source --}}
    <source srcset="{{ $src }}" type="image/{{ $srcType }}"
            @if($srcMobile) media="(min-width: {{ $desktopSize }})" @endif
    >
    @if($srcMobile)
        {{-- Desktop Fallback --}}
        <source srcset="{{ $fallback }}" type="image/{{ $fallbackType }}"
                @if($srcMobile) media="(min-width: {{ $desktopSize }})" @endif
        >

        {{-- Mobile Source --}}
        <source srcset="{{ $srcMobile }}" type="image/{{ $srcMobileType }}"
                media="(max-width: {{ $mobileSize }})"
        >

        {{-- Mobile Fallback --}}
        <source srcset="{{ $fallbackMobile }}" type="image/{{ $fallbackMobileType }}"
                media="(max-width: {{ $mobileSize }})"
        >
    @endif

    {{-- Default Image Fallback --}}
    <img src="{{ $srcMobile ? $fallbackMobile : $fallback }}"
         alt="{{ $alt }}"
         class="{{ $imgClass }}"
         loading="{{ $loading ? 'lazy' : 'eager' }}"
    >
</picture>
