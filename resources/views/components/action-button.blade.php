<button {{ $attributes->merge(['class' => 'btn']) }} type="button">
    @if ($icon)
        <i class="{{ $icon }}"></i>
    @endif
    {{ $title }}
</button>
