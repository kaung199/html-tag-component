<div class="form-group {{ $errors->has($name) ? 'has-danger' : '' }}">
    <input type="{{ $type }}" id="input-{{ $id }}" class="form-control {{ $class ?? '' }}"
        name="{{ $name }}" value="{{ old($name, $value) }}" {{ $attributes }} />

    @if ($errors->has($name))
        <label class="error text-danger">{{ $errors->first($name) }}</label>
    @endif

</div>
