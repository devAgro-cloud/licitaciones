<div class="card shadow-sm">
    <div class="card-body">
        <div class="d-flex justify-content-between align-items-center">
            <h5 class="card-title mb-4 fw-bold"> {{ $title }}</h5>
        </div>
        <div class="m-0">
            @foreach ($items as $item)
                <div class="d-flex justify-content-between align-items-center mb-4">
                    @if ($item['icon'])
                        <div class="me-3 bg-{{ $item['status_color'] }} bg-opacity-25 rounded-5 p-1">
                            <i class="{{ $item['icon'] }}"></i>
                        </div>
                    @endif

                    <div class="flex-grow-1">
                        <h6 class="mb-0 fw-bold">{{ $item['title'] }}</h6>
                        <small class="text-muted">{{ $item['subtitle'] }}</small>

                    </div>

                    <div class="badge rounded-pill bg-{{ $item['status_color'] }}-subtle">
                        @if (isset($item['status']))
                            <span class="text-{{ $item['status_color'] }}-emphasis">{{ $item['status'] }}</span>
                        @endif
                    </div>

                </div>
            @endforeach
        </div>
        <div class="text-center">
            <a href="{{ route('bids') }}" class="card-link"> Ver Todas las licitaciones </a>
        </div>
    </div>
</div>
