<div>
    <form action="{{ $url }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit" data-id="{{ $data_id }}"
            class="btn btn-danger btn-hover {{ $class ?? '' }} delete_btn" id="{{ $id }}">
            {{ $name }}
        </button>
    </form>
</div>
