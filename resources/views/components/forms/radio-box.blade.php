<div class="form-group {{ $errors->has($name) ? 'has-danger' : '' }} {{ $col ?? null }}">
    <label for="{{ $id }}">
        {!! __($label) !!}
        @if (empty($required) || strtolower($required) == 'no')
        @else
            <span class='text-danger'>*</span>
        @endif
    </label>

    <input type="checkbox" placeholder="{{ $label ?? '' }}" name="{{ $name }}" value="{{ $value }}"
        @if ($checked) checked="checked" @endif id="{{ $name }}"
        @if (isset($readOnly)) readonly="readonly" @endif
        @if (isset($disabled)) disabled="disabled" @endif
        class="form-control {{ $errors->has($name) ? 'is-invalid' : '' }} {{ $class ?? null }}"
        @if (isset($attributes)) @foreach ($attributes as $key => $value)
            {{ $key . '=' . "$value" }}
        @endforeach @endif>
    {!! $errors->first($name, '<div class="invalid-feedback">:message</div>') !!}

</div>
