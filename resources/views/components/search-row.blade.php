<div class="{{ $classMain ? $classMain : 'col-md-2' }}">
    <div class="input-group">
        <span class="input-group-text bg-secondary-subtle">
            <i class="bi bi-search"></i>
        </span>
        <input type="{{ $type }}" class="form-control {{ $class }}" name="{{ $name }}"
            {{ $attributes }} value="{{ $value }}" placeholder="{{ $placeholder }}">
    </div>
</div>
