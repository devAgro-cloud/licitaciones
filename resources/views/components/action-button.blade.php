@if ($href ?? false)
    <a href="{{ $href }}" {{ $attributes->merge(['class' => 'btn']) }}>
        @if ($icon)
            <i class="{{ $icon }}"></i>
        @endif
        {{ $title }}
    </a>
@else
    <button {{ $attributes->merge(['class' => 'btn']) }} type="button">
        @if ($icon)
            <i class="{{ $icon }}"></i>
        @endif
        {{ $title }}
    </button>
@endif
