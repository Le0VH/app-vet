@extends('layouts.app')

@section('template_title')
    {{ $seguimiento->name ?? __('Show') . " " . __('Seguimiento') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Seguimiento</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('seguimientos.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                                <div class="form-group mb-2 mb20">
                                    <strong>Id:</strong>
                                    {{ $seguimiento->ID }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Fecha:</strong>
                                    {{ $seguimiento->fecha }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Peso:</strong>
                                    {{ $seguimiento->peso }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Observaciones:</strong>
                                    {{ $seguimiento->observaciones }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Mascota Id:</strong>
                                    {{ $seguimiento->mascota_id }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
