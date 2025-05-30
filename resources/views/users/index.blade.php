@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row mb-4">
            <x-header-row title="Gestión de Usuarios" icon="bi bi-plus-circle" buttonText="Nuevo Usuario"
                icon="bi bi-person-add" subtitle="Administre los usuarios del sistema y sus permisos">
            </x-header-row>
        </div>

        <div class="row mb-4">
            <x-search-row id="searchUsers" name="searchUsers" placeholder="Buscar usuarios.."
                classMain="col-md-3"></x-search-row>

            <div class="col-md-2 text-md-end mt-2 mt-md-0">
                <x-select id="stateUser" name="stateUser" :options="[
                    ['value' => '', 'label' => 'Todos los roles', 'selected' => true],
                    ['value' => 'activa', 'label' => 'Administradores', 'selected' => false],
                    ['value' => 'evaluacion', 'label' => 'Evaluadores', 'selected' => false],
                    ['value' => 'adjudicadas', 'label' => 'Proveedores', 'selected' => false],
                    ['value' => 'cerrada', 'label' => 'Visualizadores', 'selected' => false],
                ]"></x-select>
            </div>

        </div>
        <div class="">
            <x-card title="Usuarios" valueTitle="(5)" subtitle="Lista de todos los usuarios registrados en el sistema">
                <x-slot name="slot2">
                    <table id="usersTable" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nombre</th>
                                <th>Email</th>
                                <th>Rol</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>

                </x-slot>
            </x-card>

        </div>
    </div>

    @push('scripts')
        <script>
            $(document).ready(function() {
                const table = $('#usersTable').DataTable({
                    searching: false,
                    responsive: true,
                    processing: true,
                    serverSide: true,
                    ajax: "{{ route('users.data') }}", // Ruta para obtener los datos
                    columns: [{
                            data: 'id',
                            name: 'id'
                        },
                        {
                            data: 'name',
                            name: 'name'
                        }, // Nombre completo
                        {
                            data: 'email',
                            name: 'email'
                        },
                        {
                            data: 'role',
                            name: 'role'
                        }, // Rol basado en el campo 'type'
                        {
                            data: 'actions',
                            name: 'actions',
                            orderable: false,
                            searchable: false
                        }
                    ]
                });

                $('#searchUsers').on('keyup', function() {
                    table.search(this.value).draw();
                })

                $('#stateUser').on('change', function() {
                    table.column(3).search(this.value).draw(); // Filtra por la columna "Rol"
                })
            });
        </script>
    @endpush
@endsection
