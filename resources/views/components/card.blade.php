<div {{ $attributes->except('slot2-class') }} class="card shadow-sm">
    <div class="card-body">
        <div class=" d-flex justify-content-between align-items-center">
            <h5 class="card-title mb-0 fw-bold"> {{ $title }} {{ $valueTitle ?? '' }}</h5>
            @if ($icon)
                <i class="{{ $icon }}"></i>
            @endif
        </div>
        <div class="mt-2">
            <p class="card-subtitle fw-bold">
                {{ $slot }}
            </p>
            @if ($subtitle)
                <h6 class="card-subtitle text-body-secondary mt-1">{{ $subtitle }}</h6>
            @endif
        </div>
        @if ($slot2 ?? '')
            <div class="{{ $attributes->get('slot2-class', 'mt-2') }}">
                {{ $slot2 ?? '' }}
            </div>
        @endif
    </div>
</div>
