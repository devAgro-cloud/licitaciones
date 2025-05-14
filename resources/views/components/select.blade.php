<select {{ $attributes }} name="{{ $name }}" class="form-select {{ $class }}" id="{{ $id }}">
    @foreach ($options as $option)
        <option value="{{ $option['value'] }}" {{ $option['selected'] ? 'selected' : '' }}>
            {{ $option['label'] }}
        </option>
    @endforeach
</select>
