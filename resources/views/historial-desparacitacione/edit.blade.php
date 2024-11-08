@extends('layouts.app')

@section('template_title')
    {{ __('Update') }} Historial Desparacitacione
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Update') }} Historial Desparacitacione</span>
                    </div>
                    <div class="card-body bg-white">
                        <form method="POST" action="{{ route('historial-desparacitaciones.update', $historialDesparacitacione->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('historial-desparacitacione.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
