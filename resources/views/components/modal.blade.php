{{-- resources/views/components/modal.blade.php --}}
<div class="modal fade" id="{{ $id }}" aria-hidden="true" aria-labelledby="{{ $id }}Label"
    tabindex="-1">
    <div class="modal-dialog {{ $dialogClass ?? '' }}">
        <div class="modal-content">
            @if (isset($header))
                <div class="modal-header">
                    {{ $header }}
                </div>
            @endif

            <div class="modal-body">
                {{ $slot }}
            </div>

            @if (isset($footer))
                <div class="modal-footer">
                    {{ $footer }}
                </div>
            @endif
        </div>
    </div>
</div>
