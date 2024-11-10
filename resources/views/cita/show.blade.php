@extends('layouts.app')

@section('template_title')
    {{ $cita->name ?? __('Show') . " " . __('Cita') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Cita</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('citas.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                                <div class="form-group mb-2 mb20">
                                    <strong>Fecha Cita:</strong>
                                    {{ $cita->Fecha_Cita }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Hora Cita:</strong>
                                    {{ $cita->Hora_Cita }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Motivo Cita:</strong>
                                    {{ $cita->Motivo_Cita }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Estado Cita:</strong>
                                    {{ $cita->Estado_Cita }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Tipo De Pago:</strong>
                                    {{ $cita->Tipo_De_Pago }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Mascota Id:</strong>
                                    {{ $cita->mascota_id }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Historial Med Id:</strong>
                                    {{ $cita->historial_med_id }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Usuario Id:</strong>
                                    {{ $cita->usuario_id }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Veterinario Id:</strong>
                                    {{ $cita->veterinario_id }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Seguimiento Id:</strong>
                                    {{ $cita->seguimiento_id }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
