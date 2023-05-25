<div class="row mb-3 {{ $parentClass }}">
    <div class="col-md-3 text-left">
        <label>
            {!! __($mainLabel) !!}
            @if (empty($required) || strtolower($required) == 'no')
            @else
                <span class='text-danger'>*</span>
            @endif
        </label>
    </div>
    <div class="{{ $parentContainer ? $parentContainer : 'col-md-9' }}">
        <input type="radio" name="{{ $name }}" value="{{ $valueOne }}" id="{{ $idOne }}"
            class="{{ $classOne ?? null }}" {{ $disabledOne ?? '' }}
            {{ isset($oldValue) && $oldValue != $valueTwo ? 'checked' : '' }}>
        <label for="{{ $idOne }}" title="{{ __($hoverTitleOne ?? '') }}">{{ __($labelOne) }}</label>

        <input type="radio" name="{{ $name }}" value="{{ $valueTwo }}" id="{{ $idTwo }}"
            class="{{ $classTwo ?? null }}" {{ $disabledTwo ?? '' }}
            {{ isset($oldValue) && $oldValue == $valueTwo ? 'checked' : '' }}>
        <label for="{{ $idTwo }}" title="{{ __($hoverTitleTwo ?? '') }}">{{ __($labelTwo) }}</label>

        {!! $errors->first($name, '<div class="invalid-feedback">:message</div>') !!}
    </div>
</div>
