@extends('layouts.app')

@section('template_title')
    {{ $notificacione->name ?? __('Show') . " " . __('Notificacione') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Notificacione</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('notificaciones.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                                <div class="form-group mb-2 mb20">
                                    <strong>Id:</strong>
                                    {{ $notificacione->ID }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Tipo Notificacion:</strong>
                                    {{ $notificacione->Tipo_Notificacion }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Fecha:</strong>
                                    {{ $notificacione->Fecha }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Hora:</strong>
                                    {{ $notificacione->Hora }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Mensaje:</strong>
                                    {{ $notificacione->Mensaje }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Estado Mensaje:</strong>
                                    {{ $notificacione->Estado_Mensaje }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Veterinario Id:</strong>
                                    {{ $notificacione->veterinario_id }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Usuario Id:</strong>
                                    {{ $notificacione->usuario_id }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection