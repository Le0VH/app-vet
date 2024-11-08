@extends('layouts.app')

@section('template_title')
    {{ __('Create') }} Archivos Adjunto
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Create') }} Archivos Adjunto</span>
                    </div>
                    <div class="card-body bg-white">
                        <form method="POST" action="{{ route('archivos-adjuntos.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('archivos-adjunto.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
