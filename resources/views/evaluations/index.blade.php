@extends('layouts.app')
@section('content')
    <div class="container-fluid">

        <div class="row mb-4">
            <x-header-row title="Evaluaciones"
                subtitle="Evalúe las propuestas recibidas para las licitaciones en fase de evaluación">
            </x-header-row>
        </div>

        <div class="row mb-4">
            <x-search-row name="searchEvaluations" placeholder="Buscar Propuestas.." classMain="col-md-6"></x-search-row>
        </div>

        <div class="row">
            <div class="col-md-12 mb-4">

                <div class="card shadow-sm">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <h5 class="card-title mb-0 fw-bold">Titulo</h5>
                            <div class="badge bg-success bg-success-subtle rounded-pill">
                                <span class="text-success">Activo</span>
                            </div>
                        </div>
                        <p class="card-subtitle mt-2 mb-2 text-body-secondary">Subtitulo de prueba</p>
                        <div class="card">
                            <div class="row col-12">
                                <div class="card-body col-12 col-sm-9">
                                    <x-title-status class="p-2" statusColor="success" statusText="Activo">
                                        <h6 class="card-title mb-0 fw-bold">Titulo</h6>
                                    </x-title-status>

                                    <div class="d-flex ps-2 justify-content-between align-items-center">
                                        <p class="card-subtitle mt-1 text-body-secondary">Precio:</p>
                                        <p class="card-subtitle mt-1 text-body-secondary fw-bold">$190.00</p>
                                    </div>

                                    <p class="card-subtitle mt-2 ps-2 text-body-secondary">Descripción:</p>
                                    <p class="card-subtitle ps-2 text-body-secondary">Completar el equipo de Ti</p>

                                    <div class="d-flex ps-2 justify-content-between align-items-center">
                                        <p class="card-subtitle mt-1 text-body-secondary">Puntuacion:</p>
                                        <p class="card-subtitle mt-1 text-body-secondary fw-bold">
                                            <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                                            92/100
                                        </p>
                                    </div>
                                    <p class="card-subtitle mt-2 ps-2 text-body-secondary">Comentarios:</p>
                                    <p class="card-subtitle ps-2 text-body-secondary">"Completar el equipo de Ti excelente"
                                    </p>
                                </div>

                                <div
                                    class="card-body col-12 col-sm-3 d-flex flex-sm-column justify-content-between text-center">
                                    <div class="p-2">
                                        <x-action-button title="Ver Detalles" class="btn-secondary"
                                            icon="bi bi-file-earmark-text"></x-action-button>
                                    </div>
                                    <div class="p-2">
                                        <x-action-button title="Modificar" class="btn-primary"
                                            icon="fa-regular fa-square-check"></x-action-button>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>

    </div>
@endsection
