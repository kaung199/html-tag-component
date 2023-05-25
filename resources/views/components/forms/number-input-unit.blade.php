<div class="row mb-3 {{ $errors->has($name) ? 'has-danger' : '' }} {{ $col ?? null }}">
    <div class="col-md-3 text-left">
        <label for="{{ $id }}">
            {!! __($label) !!}
            @if (empty($required) || strtolower($required) == 'no')
            @else
                <span class='text-danger'>*</span>
            @endif
        </label>
    </div>
    <div class="col-md-7">
        <input type="number" input-type="number" name="{{ $name }}" value="{{ old($name) ?? $value }}"
            id="{{ $name }}" placeholder="{{ $placeholder }}"
            @if ($readOnly) readonly="readonly" @endif
            @if ($disabled) disabled="disabled" @endif
            class="form-control {{ $errors->has($name) ? 'is-invalid' : '' }} {{ $class ?? null }}"
            @if (isset($attributes)) @foreach ($attributes as $key => $value)
            {{ $key . '=' . "$value" }}
        @endforeach @endif>
        {!! $errors->first($name, '<div class="invalid-feedback">:message</div>') !!}
    </div>
    <div class="col-md-2">
        <input type="text" input-type="text" name="{{ $unit }}" value="{{ old($unit) ?? $unitvalue }}"
            id="{{ $unit }}" placeholder="{{ $placeholderunit }}"
            @if ($readOnly) readonly="readonly" @endif
            @if ($disabled) disabled="disabled" @endif
            class="form-control {{ $errors->has($unit) ? 'is-invalid' : '' }} {{ $class ?? null }}"
            @if (isset($attributes)) @foreach ($attributes as $key => $value)
                {{ $key . '=' . "$value" }}
            @endforeach @endif>
        {!! $errors->first($unit, '<div class="invalid-feedback">:message</div>') !!}
    </div>
</div>
