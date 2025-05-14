<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Licitaciones') }}</title>

    <link rel="icon" href="{{ asset('favicon.svg') }}" type="image/svg+xml">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    {{-- <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet"> --}}

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.12.1/font/bootstrap-icons.min.css">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

    <script src="https://kit.fontawesome.com/ae68a121a9.js" crossorigin="anonymous"></script>

    <!-- jQuery (necesario para DataTables) -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- DataTables CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">

    <!-- DataTables JS -->
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>


    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <!-- Esto es necesario para que los scripts de las vistas se carguen -->
    @stack('scripts')
    <style>
        html,
        body {
            height: 100%;
        }

        #app {
            min-height: 100%;
            display: flex;
            flex-direction: column;
        }

        main {
            flex: 1;
        }

        /* #sidebar {
            width: 250px;
        }

        @media (max-width: 767.98px) {
            #sidebar {
                display: none;
            }
        } */
    </style>
</head>

<body>
    <div id="app" class="bg-body">
        <!-- Layout -->
        <section class="d-flex flex-grow-1">
            @auth
                <x-sidebar-app />
            @endauth

            <div class="d-flex flex-column flex-grow-1">
                @auth
                    <x-navbar-app />
                @endauth

                <main class="py-4 bg-body-secondary bg-opacity-25 flex-grow-1">
                    @yield('content')
                </main>
            </div>
        </section>
        <footer class="bg-white shadow text-center text-lg-start mt-auto py-3">
            <div class="container-fluid d-flex flex-column flex-md-row justify-content-between w-100">
                <span class="text-muted">Desarrollado por Agrovanic | Todos los derechos reservados © 2025</span>
                <div class="mt-2 mt-md-0 text-muted">
                    <span>Agrovanic - Sistemas</span>
                </div>
            </div>
        </footer>
    </div>
</body>

</html>
