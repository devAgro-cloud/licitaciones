<button {{ $attributes }} type="button"
    {{ $attributes->class(['btn', isset($isActive) && $isActive ? 'btn-light border' : 'flex-fill']) }}>
    {{ $title }}
    @if (isset($count))
        <small class="bg-body-secondary bg-dark-subtle ms-1 p-1 rounded rounded-5">
            {{ $count }}
        </small>
    @endif
</button>
