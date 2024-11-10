@extends('layouts.app')

@section('template_title')
    {{ $historialDesparacitacione->name ?? __('Show') . " " . __('Historial Desparacitacione') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Historial Desparacitacione</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('historial-desparacitaciones.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                                <div class="form-group mb-2 mb20">
                                    <strong>Id:</strong>
                                    {{ $historialDesparacitacione->ID }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Fecha:</strong>
                                    {{ $historialDesparacitacione->Fecha }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Observaciones:</strong>
                                    {{ $historialDesparacitacione->Observaciones }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Movimiento Id:</strong>
                                    {{ $historialDesparacitacione->movimiento_id }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Seguimiento Id:</strong>
                                    {{ $historialDesparacitacione->seguimiento_id }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
