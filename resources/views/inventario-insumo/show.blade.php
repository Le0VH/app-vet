@extends('layouts.app')

@section('template_title')
    {{ $inventarioInsumo->name ?? __('Show') . " " . __('Inventario Insumo') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Inventario Insumo</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('inventario-insumos.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                                <div class="form-group mb-2 mb20">
                                    <strong>Inventario Id:</strong>
                                    {{ $inventarioInsumo->Inventario_ID }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Nombre:</strong>
                                    {{ $inventarioInsumo->Nombre }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Descripcion:</strong>
                                    {{ $inventarioInsumo->Descripcion }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Cantidad:</strong>
                                    {{ $inventarioInsumo->Cantidad }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Proveedor:</strong>
                                    {{ $inventarioInsumo->Proveedor }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Fecha Ingreso:</strong>
                                    {{ $inventarioInsumo->Fecha_Ingreso }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Fecha Caducidad:</strong>
                                    {{ $inventarioInsumo->Fecha_Caducidad }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Costo Monetareo:</strong>
                                    {{ $inventarioInsumo->Costo_Monetareo }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
