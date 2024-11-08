@extends('layouts.app')

@section('template_title')
    Historial Desparacitaciones
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Historial Desparacitaciones') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('historial-desparacitaciones.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
									<th >Desparacitacion Id</th>
									<th >Fecha</th>
									<th >Observaciones</th>
									<th >Movimiento Id</th>
									<th >Seguimiento Id</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($historialDesparacitaciones as $historialDesparacitacione)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
										<td >{{ $historialDesparacitacione->Desparacitacion_ID }}</td>
										<td >{{ $historialDesparacitacione->Fecha }}</td>
										<td >{{ $historialDesparacitacione->Observaciones }}</td>
										<td >{{ $historialDesparacitacione->movimiento_id }}</td>
										<td >{{ $historialDesparacitacione->seguimiento_id }}</td>

                                            <td>
                                                <form action="{{ route('historial-desparacitaciones.destroy', $historialDesparacitacione->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('historial-desparacitaciones.show', $historialDesparacitacione->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('historial-desparacitaciones.edit', $historialDesparacitacione->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
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
                {!! $historialDesparacitaciones->withQueryString()->links() !!}
            </div>
        </div>
    </div>
@endsection
