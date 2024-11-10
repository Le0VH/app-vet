@extends('layouts.app')

@section('template_title')
    {{ $veterinario->name ?? __('Show') . " " . __('Veterinario') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Veterinario</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('veterinarios.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                                <div class="form-group mb-2 mb20">
                                    <strong>Nombre Veterinario:</strong>
                                    {{ $veterinario->Nombre_Veterinario }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Apellido Veterinario:</strong>
                                    {{ $veterinario->Apellido_Veterinario }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Especialialidad Veterinario:</strong>
                                    {{ $veterinario->Especialialidad_Veterinario }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Direccion Veterinario:</strong>
                                    {{ $veterinario->Direccion_Veterinario }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Telefono Veterinario:</strong>
                                    {{ $veterinario->telefono_Veterinario }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Contacto Emergencia Vet:</strong>
                                    {{ $veterinario->Contacto_Emergencia_Vet }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Email Veterinario:</strong>
                                    {{ $veterinario->Email_Veterinario }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Clinicas:</strong>
                                    {{ $veterinario->Clinicas }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
