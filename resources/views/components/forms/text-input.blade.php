<div
    class="row mb-3 {{ $id }}_sh {{ $parentClass }} {{ $errors->has($name) ? 'has-danger' : '' }} {{ $col ?? null }}">
    <div class="col-md-3 text-left {{ $labelClass ?? '' }}">
        <label for="{{ $id }}">
            {!! __($label) !!}
            @if (empty($required) || strtolower($required) == 'no')
            @else
                <span class='text-danger'>*</span>
            @endif
        </label>
    </div>
    <div class="{{ $parentContainer ? $parentContainer : 'col-md-9' }}">
        <input type="text" name="{{ $name }}" value="{{ $value ?? '' }}" id="{{ $id }}"
            placeholder="{{ $placeholder }}" @if ($readOnly) readonly="readonly" @endif
            @if ($disabled) disabled="disabled" @endif
            class="form-control {{ $errors->has($name) ? 'is-invalid' : '' }} {{ $class ?? null }}"
            autocomplete="{{ $autocomplete }}"
            @if (isset($attributes)) @foreach ($attributes as $key => $value)
                {{ $key . '=' . "$value" }}
            @endforeach @endif>
        {!! $errors->first($name, '<div class="invalid-feedback">:message</div>') !!}
    </div>
</div>
