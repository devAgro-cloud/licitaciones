<div class="col-12 d-flex justify-content-between align-items-center flex-wrap">
    <h4 class="mb-0 fw-bold">{{ $title }}</h4>
    @if ($buttonText)
        <x-action-button title="{{ $buttonText }}" class="btn-primary mt-2 mt-md-0"
            icon="{{ $icon }}"></x-action-button>
    @endif
</div>
<div class="col-12">
    <p class="text-muted">{{ $subtitle }}</p>
</div>
