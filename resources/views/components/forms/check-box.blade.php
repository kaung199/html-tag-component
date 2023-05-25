<div class="row mb-3 {{ $errors->has($name) ? 'has-danger' : '' }} {{ $col ?? null }} {{ $id . '_sh' }}">
    <div class="col-md-3 text-left">
    </div>
    <div class="col-md-9 text-left">
        <input type="checkbox" placeholder="{{ $label ?? '' }}" name="{{ $name }}" value="{{ $value }}"
            @if ($checked) checked="checked" @endif id="{{ $name }}"
            @if ($readOnly) readonly="readonly" @endif
            @if ($disabled) disabled="disabled" @endif
            class="{{ $errors->has($name) ? 'is-invalid' : '' }} {{ $class ?? null }}"> <label for="{{ $id }}">
            {!! __($label) !!}
            @if (empty($required) || strtolower($required) == 'no')
            @else
                <span class='text-danger'>*</span>
            @endif
        </label>
        {!! $errors->first($name, '<div class="invalid-feedback">:message</div>') !!}
    </div>
</div>
