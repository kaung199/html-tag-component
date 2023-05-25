@php
    $finalMetod = in_array(strtolower($method), ['put', 'delete', 'post', 'patch']) ? 'post' : 'get';
@endphp

<form id="{{ $id }}" action="{{ $action }}" method="{{ $finalMetod }}" name="{{ $formName }}"
    enctype="multipart/form-data" $attributes>
    @if ($method !== 'get')
        @csrf
    @endif

    @if (in_array($method, ['put', 'delete']))
        {{ method_field($method) }}
    @endif

    {{ $slot }}
</form>
