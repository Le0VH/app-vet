@extends('layouts.app')

@section('template_title')
    Plantilla Notificacions
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Plantilla Notificacions') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('plantilla-notificacions.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
									<th >Id</th>
									<th >Nombre</th>
									<th >Tipo Notificacion</th>
									<th >Contenido</th>
									<th >Notificacion Id</th>
									<th >Veterinario Id</th>
									<th >Usuario Id</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($plantillaNotificacions as $plantillaNotificacion)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
										<td >{{ $plantillaNotificacion->ID }}</td>
										<td >{{ $plantillaNotificacion->Nombre }}</td>
										<td >{{ $plantillaNotificacion->Tipo_Notificacion }}</td>
										<td >{{ $plantillaNotificacion->Contenido }}</td>
										<td >{{ $plantillaNotificacion->notificacion_id }}</td>
										<td >{{ $plantillaNotificacion->veterinario_id }}</td>
										<td >{{ $plantillaNotificacion->usuario_id }}</td>

                                            <td>
                                                <form action="{{ route('plantilla-notificacions.destroy', $plantillaNotificacion->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('plantilla-notificacions.show', $plantillaNotificacion->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('plantilla-notificacions.edit', $plantillaNotificacion->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
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
                {!! $plantillaNotificacions->withQueryString()->links() !!}
            </div>
        </div>
    </div>
@endsection
