@extends('layouts.app')

@section('template_title')
    Historial Medicos
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Historial Medicos') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('historial-medicos.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
									<th >Fecha</th>
									<th >Descripcion</th>
									<th >Id Atencion</th>
									<th >Examen Id</th>
									<th >Vacunas Id</th>
									<th >Citas Id</th>
									<th >Mascota Id</th>
									<th >Veterinario Id</th>
									<th >Tratamiento Id</th>
									<th >Movimiento Id</th>
									<th >Desparacitacion Id</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($historialMedicos as $historialMedico)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
										<td >{{ $historialMedico->ID }}</td>
										<td >{{ $historialMedico->Fecha }}</td>
										<td >{{ $historialMedico->Descripcion }}</td>
										<td >{{ $historialMedico->id_atencion }}</td>
										<td >{{ $historialMedico->examen_id }}</td>
										<td >{{ $historialMedico->vacunas_id }}</td>
										<td >{{ $historialMedico->citas_id }}</td>
										<td >{{ $historialMedico->mascota_id }}</td>
										<td >{{ $historialMedico->veterinario_id }}</td>
										<td >{{ $historialMedico->tratamiento_id }}</td>
										<td >{{ $historialMedico->movimiento_id }}</td>
										<td >{{ $historialMedico->desparacitacion_id }}</td>

                                            <td>
                                                <form action="{{ route('historial-medicos.destroy', $historialMedico->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('historial-medicos.show', $historialMedico->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('historial-medicos.edit', $historialMedico->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
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
                {!! $historialMedicos->withQueryString()->links() !!}
            </div>
        </div>
    </div>
@endsection
