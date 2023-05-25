<button type="submit" name="{{ $name }}" id="{{ $id }}" form="{{ $form }}"
    class="btn btn-success btn-hover {{ $class ?? null }}" {{ $disabled ? 'disabled' : '' }}>
    @switch(strtolower($type))
        @case('send_enforcement')
            <i class="fa fa-paper-plane" aria-hidden="true"></i>
        @break

        @case('add')
            <i class="fa-solid fa-circle-plus"></i>
        @break

        @default
    @endswitch
    {{ $label }}
</button>
