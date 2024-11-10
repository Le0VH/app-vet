@extends('layouts.app')

@section('template_title')
    {{ $historialExamene->name ?? __('Show') . " " . __('Historial Examene') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Historial Examene</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('historial-examenes.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                                <div class="form-group mb-2 mb20">
                                    <strong>Fecha:</strong>
                                    {{ $historialExamene->fecha }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Tipo Examen:</strong>
                                    {{ $historialExamene->Tipo_Examen }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Resultado:</strong>
                                    {{ $historialExamene->Resultado }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Observaciones:</strong>
                                    {{ $historialExamene->Observaciones }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Veterinario Id:</strong>
                                    {{ $historialExamene->veterinario_id }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Mascota Id:</strong>
                                    {{ $historialExamene->mascota_id }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Citas Id:</strong>
                                    {{ $historialExamene->citas_id }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
