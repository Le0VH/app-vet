@extends('layouts.app')

@section('template_title')
    {{ $archivosAdjunto->name ?? __('Show') . " " . __('Archivos Adjunto') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Archivos Adjunto</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('archivos-adjuntos.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                                <div class="form-group mb-2 mb20">
                                    <strong>Id:</strong>
                                    {{ $archivosAdjunto->ID }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Nombre Archivo:</strong>
                                    {{ $archivosAdjunto->Nombre_Archivo }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Tipo Archivo:</strong>
                                    {{ $archivosAdjunto->Tipo_Archivo }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Fecha Archivo:</strong>
                                    {{ $archivosAdjunto->Fecha_Archivo }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Descripcion:</strong>
                                    {{ $archivosAdjunto->Descripcion }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Veterinario Id:</strong>
                                    {{ $archivosAdjunto->veterinario_ID }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Historial Med Id:</strong>
                                    {{ $archivosAdjunto->Historial_med_ID }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Vacunas Id:</strong>
                                    {{ $archivosAdjunto->vacunas_id }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Mascota Id:</strong>
                                    {{ $archivosAdjunto->mascota_id }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Usuario Id:</strong>
                                    {{ $archivosAdjunto->usuario_id }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
