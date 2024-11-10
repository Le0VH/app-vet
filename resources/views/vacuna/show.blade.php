@extends('layouts.app')

@section('template_title')
    {{ $vacuna->name ?? __('Show') . " " . __('Vacuna') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Vacuna</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('vacunas.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                                <div class="form-group mb-2 mb20">
                                    <strong>Id:</strong>
                                    {{ $vacuna->ID }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Nombre Vacuna:</strong>
                                    {{ $vacuna->Nombre_Vacuna }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Fecha:</strong>
                                    {{ $vacuna->Fecha }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Dosis:</strong>
                                    {{ $vacuna->Dosis }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Observaciones:</strong>
                                    {{ $vacuna->Observaciones }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Laboratorio:</strong>
                                    {{ $vacuna->Laboratorio }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Mascota Id:</strong>
                                    {{ $vacuna->mascota_id }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Veterinario Id:</strong>
                                    {{ $vacuna->veterinario_id }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
