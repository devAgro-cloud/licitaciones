<div class="card shadow-sm">
    <div class="card-body">
        <div class="d-flex justify-content-between align-items-center">
            <h5 class="card-title mb-0 fw-bold"> {{ $title }}</h5>
        </div>
        <div class="mt-4">
            @foreach ($items as $item)
                <div class="d-flex justify-content-between align-items-center mb-3">
                    @if ($item['icon'])
                        <div class="me-3">
                            <i class="{{ $item['icon'] }}"></i>
                        </div>
                    @endif
    
                    <div class="flex-grow-1">
                        <h6 class="mb-0 fw-bold">{{ $item['title'] }}</h6>
                        {{-- <small class="text-muted">{{ $item['subtitle'] }}</small> --}}
                    </div>
    
                    <div>
                        <span class="fw-bold">{{ $item['number'] }}</span>
                    </div>
    
                </div>
            @endforeach
        </div>
    </div>
</div>
