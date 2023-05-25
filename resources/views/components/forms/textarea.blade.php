<div class="row mb-3 {{ $errors->has($name) ? 'has-danger' : '' }} {{ $col ?? null }} {{ $id }}_sh">
    <div class="col-md-3 text-left">
        <label for="{{ $id }}">
            {!! __($label) !!}
            @if (empty($required) || strtolower($required) == 'no')
            @else
                <span class='text-danger'>*</span>
            @endif
        </label>
    </div>
    <div class="col-md-9">
        <textarea type="text" name="{{ $name }}" value="{{ old($name) ?? $value }}" id="{{ $id }}"
            placeholder="{{ $placeholder }}" @if ($readOnly) readonly="readonly" @endif
            @if ($disabled) disabled="disabled" @endif
            class="form-control {{ $errors->has($name) ? 'is-invalid' : '' }} {{ $class ?? null }}" rows="{{ $rows }}">{{ old($name, $value) }}</textarea>
        {!! $errors->first($name, '<div class="invalid-feedback">:message</div>') !!}
    </div>
</div>
