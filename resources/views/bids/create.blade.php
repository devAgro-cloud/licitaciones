@extends('layouts.app')

@section('content')
    <div class="container-fluid">

        <div class="row mb-3">
            <x-section-header-status titleButton="Volver a Licitaciones" iconButton="bi bi-chevron-left"
                href="{{ route('bids') }}" title="Nueva Licitación">

            </x-section-header-status>

        </div>

        <div class="">
            <x-card title="Información General" subtitle="Proporcione los datos básicos de la nueva licitación"
                slot2-class="mt-4">
                <x-slot name="slot2">
                    <form id=createBidForm autocomplete="off">

                        <div class="mb-3">
                            <label for="nameBid" class="form-label fw-semibold">Título</label>
                            <input type="text" class="form-control" id="nameBid" name="nameBid"
                                aria-describedby="nameBid" placeholder="Título de la licitación" required>
                        </div>

                        <div class="mb-3">
                            <label for="descriptionBid" class="form-label fw-semibold">Descripción</label>
                            <textarea class="form-control" placeholder="Descripción detallada de la licitación" id="descriptionBid"
                                name="descriptionBid" style="min-height: 100px"></textarea>
                        </div>

                        <div class="mb-3">
                            <label for="requirementsBid" class="form-label fw-semibold">Requisitos</label>
                            <textarea class="form-control" placeholder="Requisitos para participar" id="requirementsBid" name="requirementsBid"
                                style="min-height: 100px"></textarea>
                        </div>

                        <div class="mb-2">
                            <div class="row">
                                <div class="col-6 mb-3">
                                    <label for="budgetBid" class="form-label fw-semibold">Presupuesto (USD)</label>
                                    <input type="text" class="form-control" id="budgetBid" name="budgetBid"
                                        aria-describedby="budgetBid" placeholder="Presupuesto asignado">
                                </div>
                                <div class="col-6 mb-3">
                                    <label for="statusBid" class="form-label fw-semibold">Estado</label>
                                    <x-select id="statusBid" name="statusBid" aria-label="Floating label select example"
                                        :options="[
                                            ['value' => '1', 'label' => 'Activa', 'selected' => false],
                                            ['value' => '2', 'label' => 'Cerrada', 'selected' => false],
                                            ['value' => '3', 'label' => 'En Evaluación', 'selected' => false],
                                            ['value' => '4', 'label' => 'Adjudicada', 'selected' => false],
                                            ['value' => '5', 'label' => 'Cancelada', 'selected' => false],
                                        ]">
                                    </x-select>
                                </div>
                                <div class="col-6 mb-3">
                                    <label for="startDateBid" class="form-label fw-semibold">Fecha de Inicio</label>
                                    <input type="date" class="form-control" id="startDateBid" name="startDateBid"
                                        aria-describedby="startDateBid" min="{{ now()->format('Y-m-d') }}"
                                        value="{{ now()->format('Y-m-d') }}">
                                </div>
                                <div class="col-6 mb-3">
                                    <label for="finishDateBid" class="form-label fw-semibold">Fecha de Cierre</label>
                                    <input type="date" class="form-control" id="finishDateBid" name="finishDateBid"
                                        aria-describedby="finishDateBid">
                                </div>

                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="fileBid" class="form-label fw-semibold">Documentos</label>
                            <div id="dropZone" class="border border-2 rounded-3 p-4 text-center bg-light" tabindex="0"
                                ondragover="event.preventDefault(); this.classList.add('border-success');"
                                ondragleave="this.classList.remove('border-success');" ondrop="handleDrop(event)">
                                <i class="bi bi-upload" style="font-size:2rem;"></i>
                                <div class="mt-2 fw-bold">Arrastre y suelte los archivos aquí</div>
                                <div class="text-body-secondary">O haga click para seleccionar archivos</div>
                                <button type="button" class="btn btn-outline-primary mt-2"
                                    onclick="event.stopPropagation(); document.getElementById('fileBid').click();">
                                    Seleccionar Archivos
                                </button>
                                <input type="file" id="fileBid" name="fileBid[]" class="d-none" multiple
                                    onchange="updateFileList()">
                                <div id="fileList" class="mt-3 text-start"></div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-end mt-2">
                            <x-action-button title="Cancelar" class="btn-secondary me-2" />
                            <x-action-button title="Crear Licitación" class="btn-primary" type="submit" />

                        </div>
                    </form>
                </x-slot>
            </x-card>
        </div>
        <script>
            // !se debe mejorar
            function updateFileList() {
                const input = document.getElementById('fileBid');
                const fileList = document.getElementById('fileList');
                fileList.innerHTML = '';
                if (input.files.length > 0) {
                    const ul = document.createElement('ul');
                    ul.classList.add('list-unstyled', 'mb-0');
                    for (let i = 0; i < input.files.length; i++) {
                        const li = document.createElement('li');
                        li.textContent = input.files[i].name;
                        ul.appendChild(li);
                    }
                    fileList.appendChild(ul);
                }
            }

            function handleDrop(event) {
                event.preventDefault();
                const input = document.getElementById('fileBid');
                input.files = event.dataTransfer.files;
                updateFileList();
                document.getElementById('dropZone').classList.remove('border-success');
            }
        </script>


    </div>
@endsection
