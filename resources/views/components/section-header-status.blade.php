<div class="d-inline-flex align-items-center justify-content-between">
    <div class="d-inline-flex align-items-center">
        @if ($titleButton)
            <x-action-button href="{{ $href ?? '#' }}" title="{{ $titleButton }}" icon="{{ $iconButton ?? '' }}"
                class="text-nowrap ps-0" />
        @endif
        <h2 class="d-none d-md-block fw-bold pe-3">{{ $title }}</h2>
        <h4 class="d-block d-md-none fw-bold align-self-end ">{{ $title }}</h4>
        @if (!empty($status) && !empty($textStatus))
            <div class="badge rounded-pill bg-{{ $status }} bg-{{ $status }}-subtle">
                <span class="text-{{ $status }}">{{ $textStatus }}</span>
            </div>
        @endif
    </div>
    <div class="d-inline-flex align-items-center">
        @if ($showSecondButton ?? false)
            <x-action-button title="{{ $secondButtonTitle ?? 'Guardar' }}" class="btn-primary ms-2"
                icon="{{ $secondButtonIcon ?? 'bi bi-pencil-square' }}" id="{{ $secondButtonId ?? '' }}" />
        @endif
        {{ $slot ?? '' }}
    </div>
</div>
