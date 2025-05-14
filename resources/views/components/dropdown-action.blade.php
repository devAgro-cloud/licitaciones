<div class="dropdown d-flex justify-content-center">
    <button class="btn btn-secondary btn-sm" type="button" id="dropdownMenuButton{{ $id }}"
        data-bs-toggle="dropdown" aria-expanded="false">
        <i class="bi bi-three-dots-vertical"></i>
    </button>
    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton{{ $id }}">
        <li>
            <a class="dropdown-item" href="{{ $editRoute }}"><i class="bi bi-pencil-square"></i> Editar</a>
        </li>
        <li>
            <form method="POST" action="{{ $deleteRoute }}"
                onsubmit="return confirm('¿Estás seguro de eliminar este usuario?');">
                @csrf
                @method('DELETE')
                <i></i>
                <button type="submit" class="dropdown-item text-danger"><i class="bi bi-trash"></i> Eliminar</button>
            </form>
        </li>
    </ul>
</div>
