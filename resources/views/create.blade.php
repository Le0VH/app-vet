@extends('layouts.base')

@section('content')
<div class="row">
    <div class="col-12">
        <div>
            <h2>Registro de nuevo usuario</h2>
        </div>
        <div>
            <a href="{{route('usuarios.index')}}" class="btn btn-primary">Volver</a>
        </div>
    </div>

    <form action="{{route('usuarios.store')}}" method="POST">
        @csrf
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
            <div class="form-group">
                    <input type="hidden" name="Usuario_ID" class="form-control" placeholder="" value="0" >
                </div>
                <div class="form-group">
                    <strong>Nombre:</strong>
                    <input type="text" name="Nombre" class="form-control" placeholder="Nombre" >
                </div>
                <div class="form-group">
                    <strong>Apellidos:</strong>
                    <input type="text" name="Apellido" class="form-control" placeholder="Apellidos" >
                </div>
                <div class="form-group">
                    <strong>Email:</strong>
                    <input type="text" name="Email" class="form-control" placeholder="Email" >
                </div>
                <div class="form-group">
                    <strong>Telefono:</strong>
                    <input type="text" name="Telefono" class="form-control" placeholder="Telefono" >
                </div>
                <div class="form-group">
                    <strong>Rol:</strong>
                    <input type="text" name="Rol" class="form-control" placeholder="Rol" >
                </div>
                <div class="form-group">
                    <strong>Contraseña:</strong>
                    <input type="password" name="Contraseña" class="form-control" placeholder="Contraseña" >
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center mt-2">
                <button type="submit" class="btn btn-primary">Crear</button>
            </div>
        </div>
    </form>
</div>
@endsection