@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row mb-4">
            <div class="col-md-6">
                <h4 class="text-dark fw-bold">Bienvenido, {{ Auth::user()->firstname }}</h4>
            </div>
            <div class="col-md-6 text-md-end text-muted">
                <h5>{{ \Carbon\Carbon::now()->translatedFormat('l, j \d\e F \d\e Y') }}</h5>
            </div>
        </div>

        <div class="row">
            <div class="col-md-3 mb-4">
                <x-card title="Licitaciones Activas" subtitle="Oportunidades disponibles para postular"
                    icon="bi bi-file-earmark-text ms-2">
                    2
                </x-card>
            </div>
            <div class="col-md-3 mb-4">
                <x-card title="En Evaluación" subtitle="Licitaciones en fase de evaluación" icon="bi bi-clipboard-check ms-2">
                    2
                </x-card>
            </div>
            <div class="col-md-3 mb-4">
                <x-card title="Licitaciones Adjudicadas" subtitle="Licitaciones que han sido adjudicadas" icon="bi bi-award ms-2">
                    3
                </x-card>
            </div>
            <div class="col-md-3 mb-4">
                <x-card title="Próximos a Vencer" subtitle="Licitaciones que cierran en menos de 7 días" icon="bi bi-clock ms-2">
                    3
                </x-card>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 mb-4">
                <x-card-list title="Listado de Elementos" :items="[
                    [
                        'icon' => 'bi bi-file-earmark-text',
                        'title' => 'Office Supplies Procurement',
                        'subtitle' => 'Presupuesto: $50.000 • Cierre: 31/3/2023',
                        'status' => 'Activa',
                        'status_color' => 'success',
                    ],
                    [
                        'icon' => 'fa-regular fa-square-check',
                        'title' => 'IT Equipment Services',
                        'subtitle' => 'Presupuesto: $200.000 • Cierre: 14/3/2023',
                        'status' => 'Adjudicada',
                        'status_color' => 'warning',
                    ],
                    [
                        'icon' => 'bi bi-award',
                        'title' => 'Office Renovation Project',
                        'subtitle' => 'Presupuesto: $500.000 • Cierre: 9/2/2023',
                        'status' => 'En evaluación',
                        'status_color' => 'info',
                    ],
                    [
                        'icon' => 'bi bi-clock',
                        'title' => 'Marketing Services',
                        'subtitle' => 'Presupuesto: $500.000 • Cierre: 9/2/2023',
                        'status' => 'Cerrada',
                        'status_color' => 'secondary',
                    ],
                ]">
                </x-card-list>
            </div>
            <div class="col-md-6 mb-4">
                <x-simple-card-list title="Estadísticas" :items="[
                    [
                        'icon' => 'bi bi-bar-chart-line-fill',
                        'title' => 'Total de licitaciones',
                        'number' => 120,
                    ],
                    [
                        'icon' => 'bi bi-pie-chart-fill',
                        'title' => 'Total de Propuestas',
                        'number' => 120,
                    ],
                    [
                        'icon' => 'bi bi-award',
                        'title' => 'Total de Adjudicaciones',
                        'number' => 120,
                    ],
                    [
                        'icon' => 'bi bi-people',
                        'title' => 'Proveedores Activos',
                        'number' => 120,
                    ],
                ]">
                </x-simple-card-list>
            </div>
        </div>
    @endsection
