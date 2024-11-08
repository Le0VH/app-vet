@extends('layouts.app')

@section('template_title')
    {{ $plantillaNotificacion->name ?? __('Show') . " " . __('Plantilla Notificacion') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Plantilla Notificacion</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('plantilla-notificacions.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                                <div class="form-group mb-2 mb20">
                                    <strong>Pantilla Id:</strong>
                                    {{ $plantillaNotificacion->Pantilla_ID }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Nombre:</strong>
                                    {{ $plantillaNotificacion->Nombre }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Tipo Notificacion:</strong>
                                    {{ $plantillaNotificacion->Tipo_Notificacion }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Contenido:</strong>
                                    {{ $plantillaNotificacion->Contenido }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Notificacion Id:</strong>
                                    {{ $plantillaNotificacion->notificacion_id }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Veterinario Id:</strong>
                                    {{ $plantillaNotificacion->veterinario_id }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Usuario Id:</strong>
                                    {{ $plantillaNotificacion->usuario_id }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
