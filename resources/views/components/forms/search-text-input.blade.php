<div>
    <input type="text" name="{{ $name }}" value="{{ $value ?? '' }}" id="{{ $id }}"
        placeholder="{{ $placeholder }}"
        class="form-control {{ $errors->has($name) ? 'is-invalid' : '' }} {{ $class ?? null }}"
        autocomplete="{{ $autocomplete }}"
        @if (isset($attributes)) @foreach ($attributes as $key => $value)
                {{ $key . '=' . "$value" }}
            @endforeach @endif>
    {!! $errors->first($name, '<div class="invalid-feedback">:message</div>') !!}
</div>
