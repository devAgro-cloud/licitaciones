<a href="{{ $href }}" class="card text-decoration-none shadow-sm border-0">
    <div class="card">
        <div class="card-body">
            <x-title-status statusColor="{{ $statusColor }}" statusText="{{ $statusText }}">
                <h5 class="card-title mb-0 fw-bold">{{ $title }}</h5>
            </x-title-status>
            <p class="card-subtitle mt-2 mb-2 text-body-secondary">{{ $descriptionText }}</p>
            @if (!empty($labels))
                @foreach ($labels as $label)
                    <div class="d-flex justify-content-between align-items-center">
                        <p class="card-subtitle mt-1 text-body-secondary">{{ $label['label'] }}</p>
                        <p class="card-subtitle mt-1 text-body-secondary fw-bold">{{ $label['value'] }}</p>
                    </div>
                @endforeach
            @endif
            <div class="d-flex justify-content-end mt-4">
                @if (!empty($buttonText))
                    <x-action-button class="bg-secondary-subtle fw-bold" title="{{ $buttonText }}"
                        href="{{ $href }}"></x-action-button>
                @endif
            </div>
        </div>
    </div>
</a>
