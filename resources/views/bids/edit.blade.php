@extends('layouts.app')

@section('content')
    <div class="container-fluid">

        <div class="row mb-3">

            <x-section-header-status title="Nueva Licitación" titleButton="Volver" href="{{ route('bids') }}"
                iconButton="bi bi-chevron-left" status="success" textStatus="Activo" :showSecondButton="true"
                secondButtonTitle="Guardar" secondButtonIcon="bi bi-save" secondButtonId="saveBidButton" />

        </div>

        <div class="">
            <x-card title="Información General" subtitle="Proporcione los datos básicos de la nueva licitación">
                <x-slot name="slot2">
                    <form id=createBidForm>
                        <div class="mb-3">
                            <label for="" class="form-label">Nombre</label>
                            <input type="text" class="form-control" id="name" aria-describedby="nameHelp">
                        </div>
                    </form>
                </x-slot>

            </x-card>


        </div>



    </div>
@endsection
