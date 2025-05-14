@extends('layouts.app')

@section('content')
    <div class="container-fluid">

        <div class="row mb-4">
            <x-header-row title="Licitaciones" icon="bi bi-plus-circle" buttonText="Nueva Licitacion"
                subtitle="Gestione todas las licitaciones del sistema">
            </x-header-row>
        </div>

        <div class="row mb-4">
            <x-search-row name="searchBids" placeholder="Buscar licitaciones ..."></x-search-row>

            <div class="col-md-2 text-md-end mt-2 mt-md-0">
                <x-select name="estado" :options="[
                    ['value' => '', 'label' => 'Todos los estados', 'selected' => true],
                    ['value' => 'activa', 'label' => 'Activas', 'selected' => false],
                    ['value' => 'evaluacion', 'label' => 'En Evaluación', 'selected' => false],
                    ['value' => 'adjudicadas', 'label' => 'Adjudicadas', 'selected' => false],
                    ['value' => 'cerrada', 'label' => 'Cerradas', 'selected' => false],
                ]"></x-select>
            </div>
        </div>

        <div class="row md-4">
            <div class="col-12 mb-4">
                <div class="p-1 btn-group flex-wrap border bg-body-secondary" role="group">
                    <x-button-nav title="Activas" count="1" :isActive="true"></x-button-nav>
                    <x-button-nav title="En Evaluación"></x-button-nav>
                    <x-button-nav title="Adjudicados" count="5"></x-button-nav>
                    <x-button-nav title="Cerradas"></x-button-nav>
                    <x-button-nav title="Todas" count="1"></x-button-nav>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-3 md-4">
                <x-action-card-info href="" title="Licitacion" statusColor="success" statusText="Activo"
                    descriptionText="Descripcion breve de la licitacion" :labels="[
                        ['label' => 'Fecha de Inicio', 'value' => '2023-10-01'],
                        ['label' => 'Fecha de Cierre', 'value' => '2023-10-15'],
                        ['label' => 'Monto', 'value' => '$1000'],
                    ]"
                    buttonText="Ver Detalles"></x-action-card-info>
            </div>
            <div class="col-md-3 md-4">
                <x-action-card-info href="" title="Licitacion" statusColor="success" statusText="Activo"
                    descriptionText="Descripcion breve de la licitacion" :labels="[
                        ['label' => 'Fecha de Inicio', 'value' => '2023-10-01'],
                        ['label' => 'Fecha de Cierre', 'value' => '2023-10-15'],
                        ['label' => 'Monto', 'value' => '$1000'],
                    ]"
                    buttonText="Ver Detalles"></x-action-card-info>
            </div>
        </div>

    </div>
@endsection
