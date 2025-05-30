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
                                        <x-action-button href="{{ route('bids.show', 1) }}" title="Ver Detalles"
                                            class="btn-secondary" icon="bi bi-file-earmark-text"></x-action-button>
                                    </div>
                                    <div class="p-2">
                                        <x-action-button title="Modificar" class="btn-primary"
                                            icon="fa-regular fa-square-check" data-bs-toggle="modal"
                                            data-bs-target="#evaluationModal"></x-action-button>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Modal de Modificacion Evaluations --}}

    <x-modal id="evaluationModal" dialogClass="modal-dialog-centered">
        <div class="d-flex justify-content-between align-items-center">
            <h1 class="modal-title fs-5">Evaluar Propuesta</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
        </div>
        <p>Propuesta de <b>Company One</b></p>
        <div class="d-flex">
            <div class="pe-5">
                <p class="m-0">Precio:</p>
                <span class="fw-semibold">$190.00</span>
            </div>
            <div class="">
                <p class="m-0">Fecha:</p>
                <span class="fw-semibold">24/2/2023</span>
            </div>
        </div>

        <div class="pt-3">
            <p class="m-0">Descripción:</p>
            <span class="fw-semibold">Complete IT equipment and 24/7 support package</span>
        </div>

        <hr />
        <div class="mb-3">
            <label for="scoreProposal" class="form-label fw-semibold">Puntuación (1-100)</label>
            <div class="input-group">
                <input type="number" class="form-control" id="scoreProposal" name="scoreProposal"
                    aria-describedby="scoreProposal" name="score" min="1" max="100"
                    placeholder="Ingrese puntaje"
                    oninput="if(this.value.length > 3) this.value = this.value.slice(0,3); updateScoreLabel(this);">
                <span class="input-group-text" id="scoreLabel"></span>

            </div>
        </div>
        <div class="mb-3">
            <label for="commentEvaluation" class="form-label fw-semibold">Comentarios</label>
            <textarea class="form-control" placeholder="Descripción detallada de la licitación" id="commentEvaluation"
                name="commentEvaluation" style="min-height: 100px"></textarea>
        </div>
        <div class="text-end">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
            <button type="submit" class="btn btn-primary">Guardar Evaluación</button>
        </div>
    </x-modal>

    <script>
        function updateScoreLabel(input) {
            let value = parseInt(input.value, 10);
            let label = document.getElementById('scoreLabel');

            if (isNaN(value)) {
                label.textContent = '';
            } else if (value >= 85) {
                label.textContent = 'Excelente';
            } else if (value >= 70) {
                label.textContent = 'Bueno';
            } else if (value >= 50) {
                label.textContent = 'Regular';
            } else {
                label.textContent = 'Bajo';
            }
        }
    </script>
@endsection
