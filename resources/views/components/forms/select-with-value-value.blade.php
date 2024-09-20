<div class="row mb-3 {{ $class }} {{ $id }}_sh {{ $errors->has($name) ? 'has-danger' : '' }}">
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
        <select class="form-control select2" id="{{ $id }}" name="{{ $name }}"
            @if ($readOnly) readonly="readonly" @endif
            @if ($multiple) multiple @endif
            @if ($disabled) disabled="disabled" @endif>
            <option value="">Please Select</option>
            @if ($multiple)
                @php
                    $is_selected = in_array($key, $selected);
                @endphp
            @else
                @php
                    $is_selected = old($key, $selected) == $key;
                @endphp
            @endif
                <option value="{{ $key }}" {{ $is_selected ? 'selected' : '' }}>
                    {{ __($value) }}
                </option>
            @endforeach
        </select>

        @if ($errors->has($name))
            <label class="error mt-2 text-danger text-center">{{ $errors->first($name) }}</label>
        @endif
    </div>
</div>
