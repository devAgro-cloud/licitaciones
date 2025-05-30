@extends('layouts.app')

@section('content')
    <div class="container-fluid">

        <div class="row mb-3">
            <x-section-header-status titleButton="Volver" iconButton="bi bi-chevron-left" href="{{ route('bids') }}"
                title="Office Supplies Procurement" status="success" textStatus="Activa" showSecondButton="true"
                secondButtonTitle="Editar" />
        </div>

        <div class="row">
            <div class="col-md-6 d-flex flex-column gap-3">
                <div class="">
                    <x-card title="Detalles de la Licitación" slot2-class="mt-3">
                        <x-slot name="slot2">
                            <div class="row">
                                <p class="mb-1 fw-bold">Descripción</p>
                                <p class="card-subtitle mb-2 text-body-secondary">Procurement of various office supplies for
                                    corporate headquarters</p>
                                <p class="mb-1 fw-bold">Requisitos</p>
                                <p class="card-subtitle mb-2 text-body-secondary">Delivery within 30 days. All items must be
                                    new
                                    and
                                    under warranty.</p>
                            </div>
                            <div class="row mt-2">
                                <div class="col-6">
                                    <p class="mb-1 fw-bold"><i class="bi bi-calendar2-check"></i> Fecha de Inicio</p>
                                    <p class="card-subtitle mb-2 text-body-secondary">28/2/2023</p>
                                </div>
                                <div class="col-6">
                                    <p class="mb-1 fw-bold"><i class="bi bi-calendar2-x"></i> Fecha de Cierre</p>
                                    <p class="card-subtitle mb-2 text-body-secondary">31/3/2023</p>
                                </div>
                                <div class="col-6">
                                    <p class="mb-1 fw-bold"><i class="bi bi-file-earmark-text"></i> Presupuesto</p>
                                    <p class="card-subtitle mb-2 text-body-secondary">$50.000</p>
                                </div>
                                <div class="col-6">
                                    <p class="mb-1 fw-bold"><i class="bi bi-people"></i> Propuestas</p>
                                    <p class="card-subtitle mb-2 text-body-secondary">2</p>
                                </div>
                            </div>
                        </x-slot>
                    </x-card>
                </div>
                <div class="">
                    <x-card-section title="Documentos">
                        <div class="card">
                            <div class="card-body d-flex justify-content-between align-items-center">
                                <div class="d-flex align-items-center">
                                    <i class="bi bi-file-earmark-text"></i>
                                    <div class="ps-2">
                                        <p class="m-0 fw-medium">Nombre.pdf</p>
                                        <p class="m-0 text-body-secondary">1.00 KB • Subido el 28/2/2023</p>

                                    </div>
                                </div>
                                <button class="btn btn-light btn-sm fs-5">
                                    <i class="bi bi-download"></i>
                                </button>

                            </div>
                        </div>
                    </x-card-section>
                </div>
            </div>
        </div>
        <div class="col-md-6 mt-sm-0 mt-3">
            <x-card-section title="Propuestas Recibidas" subtitle="2 propuestas para esta licitación">
                <x-bid-proposal-card company="Company one" statusColor="success" statusTextColor="success"
                    statusText="Activo" date="9/3/2023" price="45.000" score="92/100"
                    description="Complete office supplies package with next-day delivery">
                </x-bid-proposal-card>

                <x-bid-proposal-card company="Company Two" statusText="Pendiente" date="9/3/2023" price="45.000"
                    score="92/100" description="Complete office supplies package with next-day delivery">
                </x-bid-proposal-card>
            </x-card-section>

        </div>
        <script></script>
    </div>
@endsection
