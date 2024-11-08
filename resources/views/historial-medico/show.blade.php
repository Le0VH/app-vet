@extends('layouts.app')

@section('template_title')
    {{ $historialMedico->name ?? __('Show') . " " . __('Historial Medico') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Historial Medico</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('historial-medicos.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                                <div class="form-group mb-2 mb20">
                                    <strong>Historial Medico Id:</strong>
                                    {{ $historialMedico->Historial_Medico_ID }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Fecha:</strong>
                                    {{ $historialMedico->Fecha }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Descripcion:</strong>
                                    {{ $historialMedico->Descripcion }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Id Atencion:</strong>
                                    {{ $historialMedico->id_atencion }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Examen Id:</strong>
                                    {{ $historialMedico->examen_id }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Vacunas Id:</strong>
                                    {{ $historialMedico->vacunas_id }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Citas Id:</strong>
                                    {{ $historialMedico->citas_id }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Mascota Id:</strong>
                                    {{ $historialMedico->mascota_id }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Veterinario Id:</strong>
                                    {{ $historialMedico->veterinario_id }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Tratamiento Id:</strong>
                                    {{ $historialMedico->tratamiento_id }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Movimiento Id:</strong>
                                    {{ $historialMedico->movimiento_id }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Desparacitacion Id:</strong>
                                    {{ $historialMedico->desparacitacion_id }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
