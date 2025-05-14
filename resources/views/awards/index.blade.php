@extends('layouts.app')
@section('content')
    <div class="container-fluid">

        <div class="row mb-4">
            <x-header-row title="Adjudicaciones" subtitle="Gestione las licitaciones adjudicadas y sus contratos">
            </x-header-row>
        </div>

        <div class="row mb-4">
            <x-search-row name="searchAwards" placeholder="Buscar Ajudicaciones.." classMain="col-md-6"></x-search-row>

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

        <div class="row">
            <div class="col-md-12 mb-4">
                <div class="p-1 btn-group flex-wrap border bg-body-secondary" role="group">
                    <x-button-nav title="Todas" count="1" :isActive="true"></x-button-nav>
                    <x-button-nav title="Pendientes"></x-button-nav>
                    <x-button-nav title="Activos" count="5"></x-button-nav>
                    <x-button-nav title="Completados"></x-button-nav>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-3 md-4">
                <x-card-info title="Office Renovation Project" statusColor="success" statusText="Activo"
                    descriptionText="Adjudicado a" valueDescriptionText="Company Two" :labels="[
                        ['label' => 'Valor del Contrato:', 'value' => '$480.000'],
                        ['label' => 'Fecha de Adjudicación:', 'value' => '14/2/2023'],
                        ['label' => 'Fecha de Inicio:', 'value' => '28/2/2023'],
                        ['label' => 'Fecha de Término:', 'value' => '31/7/2023'],
                        ['label' => 'Documentos:', 'value' => '1'],
                    ]">
                    <div class="text-center">
                        <div class="pb-3">
                            <x-action-button title="Ver Licitación" class="bg-secondary-subtle fw-bold col-12"
                                icon="bi bi-file-earmark-text">
                            </x-action-button>
                        </div>
                        <div class="p-0">
                            <x-action-button title="Documentos del Contrato" class="btn-primary fw-bold col-12"
                                icon="fa-regular fa-square-check"></x-action-button>
                        </div>
                </x-card-info>
            </div>
        </div>

    </div>

    </div>
@endsection
