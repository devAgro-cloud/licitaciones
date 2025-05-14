@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row mb-4">
            <x-header-row title="Configuración" subtitle="Administre sus preferencias y configuración del sistema">
            </x-header-row>
        </div>
        <div class="row mb-4">
            <div class="col-md-12 mb-4">
                <div class="p-1 btn-group flex-wrap border bg-body-secondary" role="group">
                    <a href="#" class="load-section" data-url="{{ route('settings.profile') }}">
                        <x-button-nav title="Mi Perfil" :isActive="true"></x-button-nav>
                    </a>
                    <a href="#" class="load-section" data-url="{{ route('settings.notification') }}">
                        <x-button-nav title="Notificaciones"></x-button-nav>
                    </a>
                    {{-- <a href="#" class="load-section" data-url="{{ route('settings.system') }}">
                        <x-button-nav title="Sistema"></x-button-nav>
                    </a> --}}
                </div>
            </div>

            <div class="row m-0" id=dynamic-content>



            </div>
        </div>

        @push('scripts')
            <script>
                $(document).ready(function() {

                    // Cargar la vista de "Mi Perfil" por defecto
                    const defaultUrl = "{{ route('settings.profile') }}";
                    $('#dynamic-content').html(
                        '<div class="text-center my-5"><div class="spinner-border" role="status"><span class="visually-hidden">Cargando...</span></div></div>'
                    );
                    $.get(defaultUrl, function(data) {
                        $('#dynamic-content').html(data);
                    }).fail(function() {
                        $('#dynamic-content').html(
                            '<div class="alert alert-danger">Error al cargar la sección.</div>'
                        );
                    });

                    // Manejar clic en los botones de navegación
                    $('.load-section').on('click', function(e) {
                        e.preventDefault();

                        // Obtener la URL de la sección
                        const url = $(this).data('url');

                        // Cargar el contenido dinámicamente
                        $('#dynamic-content').html(
                            '<div class="text-center my-5"><div class="spinner-border" role="status"><span class="visually-hidden">Cargando...</span></div></div>'
                        );
                        $.get(url, function(data) {
                            $('#dynamic-content').html(data);
                        }).fail(function() {
                            $('#dynamic-content').html(
                                '<div class="alert alert-danger">Error al cargar la sección.</div>');
                        });
                    });
                });
            </script>
        @endpush
    @endsection
