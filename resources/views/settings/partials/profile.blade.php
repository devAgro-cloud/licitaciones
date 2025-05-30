<x-card title="Información de Perfil" subtitle="Actualice su información personal y credenciales de acceso">
    <x-slot name="slot2">
        <form id="profileForm">
            <div class="mb-3">
                <label for="" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="name" aria-describedby="nameHelp">
                {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <hr>
            <h3>Cambiar Contraseña</h3>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Contraseña Actual</label>
                <input type="password" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Nueva Contraseña</label>
                <input type="password" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Confirmar Contraseña</label>
                <input type="password" class="form-control" id="exampleInputPassword1">
            </div>

        </form>
        <x-action-button class="btn-primary" icon="bi bi-floppy" title="Guardar Cambios" id="saveProfile">
        </x-action-button>

    </x-slot>
</x-card>

@push('scripts')
    <script></script>
@endpush
