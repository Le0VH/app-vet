@extends('layouts.app')

@section('template_title')
    Archivos Adjuntos
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Archivos Adjuntos') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('archivos-adjuntos.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success m-4">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body bg-white">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
									<th >Archivos Id</th>
									<th >Nombre Archivo</th>
									<th >Tipo Archivo</th>
									<th >Fecha Archivo</th>
									<th >Descripcion</th>
									<th >Veterinario Id</th>
									<th >Historial Med Id</th>
									<th >Vacunas Id</th>
									<th >Mascota Id</th>
									<th >Usuario Id</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($archivosAdjuntos as $archivosAdjunto)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
										<td >{{ $archivosAdjunto->Archivos_ID }}</td>
										<td >{{ $archivosAdjunto->Nombre_Archivo }}</td>
										<td >{{ $archivosAdjunto->Tipo_Archivo }}</td>
										<td >{{ $archivosAdjunto->Fecha_Archivo }}</td>
										<td >{{ $archivosAdjunto->Descripcion }}</td>
										<td >{{ $archivosAdjunto->veterinario_ID }}</td>
										<td >{{ $archivosAdjunto->Historial_med_ID }}</td>
										<td >{{ $archivosAdjunto->vacunas_id }}</td>
										<td >{{ $archivosAdjunto->mascota_id }}</td>
										<td >{{ $archivosAdjunto->usuario_id }}</td>

                                            <td>
                                                <form action="{{ route('archivos-adjuntos.destroy', $archivosAdjunto->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('archivos-adjuntos.show', $archivosAdjunto->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('archivos-adjuntos.edit', $archivosAdjunto->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm" onclick="event.preventDefault(); confirm('Are you sure to delete?') ? this.closest('form').submit() : false;"><i class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $archivosAdjuntos->withQueryString()->links() !!}
            </div>
        </div>
    </div>
@endsection
