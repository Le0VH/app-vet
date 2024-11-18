@extends('layouts.app')

@section('template_title')
    {{ $mascota->name ?? __('Show') . " " . __('Mascota') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Mascota</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('mascotas.index') }}"> {{ __('Volver') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                                <div class="form-group mb-2 mb20">
                                    <strong>Nombre Mascota:</strong>
                                    {{ $mascota->nombre_mascota }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Especie:</strong>
                                    {{ $mascota->Especie }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Raza:</strong>
                                    {{ $mascota->Raza }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Tipo Pelaje:</strong>
                                    {{ $mascota->Tipo_Pelaje }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Color Pelaje:</strong>
                                    {{ $mascota->Color_Pelaje }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Fecha Nacimiento:</strong>
                                    {{ $mascota->Fecha_Nacimiento }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Fecha Adopcion:</strong>
                                    {{ $mascota->Fecha_Adopcion }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Peso:</strong>
                                    {{ $mascota->Peso }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Tipificacion Sangre:</strong>
                                    {{ $mascota->Tipificacion_Sangre }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Numero Chip:</strong>
                                    {{ $mascota->Numero_Chip }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Castracion:</strong>
                                    {{ $mascota->Castracion }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Fecha Castracion:</strong>
                                    {{ $mascota->Fecha_Castracion }}
                                </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
