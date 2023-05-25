<div class="form-group {{ $errors->has($name) ? 'has-danger' : '' }}">

    <label for="{{ $id }}">
        {!! __($label) !!}
        @if (empty($required) || strtolower($required) == 'no')
        @else
            <span class='text-danger'>*</span>
        @endif
    </label>

    <select class="form-control select2" id="{{ $id }}" name="{{ $name }}"
        @if ($readOnly) readonly="readonly" @endif
        @if ($disabled) disabled="disabled" @endif>
        @foreach ($list as $key => $obj)
            <option value="{{ $obj->id }}" {{ old($name, $selected) == $key ? 'selected' : '' }}>
                {{ $obj }}
            </option>
        @endforeach
    </select>

    @if ($errors->has($name))
        <label class="error mt-2 text-danger text-center">{{ $errors->first($name) }}</label>
    @endif

</div>
