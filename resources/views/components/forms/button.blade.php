<div class="form-group">
    <button name="{{ $name }}" id="{{ $name }}"
        class="btn btn-primary btn-hover {{ $errors->has($name) ? 'is-invalid' : '' }} {{ $class ?? null }}"
        {{ $disabled }} {{ $readOnly }}>{{ $label }}</button>
</div>
