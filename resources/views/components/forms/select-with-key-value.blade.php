<div class="row mb-3 {{ $errors->has($name) ? 'has-danger' : '' }} {{ $id }}_sh">
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
        <select class="form-control select2 {{ $class }}" id="{{ $id }}" name="{{ $name }}"
            @if ($readOnly) readonly="readonly" @endif
            @if ($multiple) multiple @endif
            @if ($disabled) disabled="disabled" @endif>
            <option value="">Please Select</option>
            @foreach ($list as $key => $value)
                @if($multiple)
                    @php
                       $is_selected =  in_array($key, $selected);
                    @endphp
                @else
                    @php
                       $is_selected =  old($key, $selected) == $key;
                    @endphp
                @endif
                <option value="{{ $key }}" {{ $is_selected ? 'selected' : '' }}>
                    {{ __($value) }}
                </option>
            @endforeach
        </select>

        @if ($errors->has($name))
            <label class="error mt-2 text-danger">{{ $errors->first($name) }}</label>
        @endif

    </div>
</div>
