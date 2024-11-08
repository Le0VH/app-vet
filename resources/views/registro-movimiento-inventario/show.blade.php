@extends('layouts.app')

@section('template_title')
    {{ $registroMovimientoInventario->name ?? __('Show') . " " . __('Registro Movimiento Inventario') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Registro Movimiento Inventario</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('registro-movimiento-inventarios.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                                <div class="form-group mb-2 mb20">
                                    <strong>Movimiento Id:</strong>
                                    {{ $registroMovimientoInventario->Movimiento_ID }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Fecha:</strong>
                                    {{ $registroMovimientoInventario->Fecha }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Cantidad:</strong>
                                    {{ $registroMovimientoInventario->Cantidad }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Tipo Movimiento:</strong>
                                    {{ $registroMovimientoInventario->Tipo_Movimiento }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Descripcion:</strong>
                                    {{ $registroMovimientoInventario->Descripcion }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Inventario Id:</strong>
                                    {{ $registroMovimientoInventario->inventario_id }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
