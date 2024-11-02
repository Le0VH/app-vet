@extends('layouts.base')

@section('content')
<div class="row">
    <div class="col-12">
        <div>
            <h2 class="text-white">CRUD de Usuarios</h2>
        </div>
        <div>
            <a href="" class="btn btn-primary">Actualizar Datos</a>
        </div>
    </div>

    <div class="col-12 mt-4">
        <table class="table table-bordered text-white">
            <tr class="text-secondary">
                <th>Nombre</th>
                <th>Descripción</th>
                <th>Fecha</th>
                <th>Estado</th>
                <th>Acción</th>
            </tr>
            @foreach ($usuarios as $usuarios)
            <tr>
                <td class="fw-bold">{{$usuarios->Nombre}}</td>
                <td>Ver video: tu primer CRUD con laravel 10 en el canal de YouDevs</td>
                <td>
                    31/03/23
                </td>
                <td>
                    <span class="badge bg-warning fs-6">Pendiente</span>
                </td>
                <td>
                    <a href="" class="btn btn-warning">Editar</a>

                    <form action="" method="post" class="d-inline">
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach
            
        </table>
    </div>
</div>
@endsection