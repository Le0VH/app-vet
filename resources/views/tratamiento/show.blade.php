@extends('layouts.app')

@section('template_title')
    {{ $tratamiento->name ?? __('Show') . " " . __('Tratamiento') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Tratamiento</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('tratamientos.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                                <div class="form-group mb-2 mb20">
                                    <strong>Tratamiento Id:</strong>
                                    {{ $tratamiento->Tratamiento_ID }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Fecha Inicio:</strong>
                                    {{ $tratamiento->Fecha_Inicio }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Fecha Termino:</strong>
                                    {{ $tratamiento->Fecha_Termino }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Descripcion Tratamiento:</strong>
                                    {{ $tratamiento->Descripcion_Tratamiento }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Observaciones:</strong>
                                    {{ $tratamiento->Observaciones }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Veterinario Id:</strong>
                                    {{ $tratamiento->veterinario_id }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Movimiento Id:</strong>
                                    {{ $tratamiento->movimiento_id }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
