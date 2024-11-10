@extends('layouts.app')

@section('template_title')
    Tratamientos
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Tratamientos') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('tratamientos.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
									<th >Fecha Inicio</th>
									<th >Fecha Termino</th>
									<th >Descripcion Tratamiento</th>
									<th >Observaciones</th>
									<th >Veterinario Id</th>
									<th >Movimiento Id</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($tratamientos as $tratamiento)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
										<td >{{ $tratamiento->ID }}</td>
										<td >{{ $tratamiento->Fecha_Inicio }}</td>
										<td >{{ $tratamiento->Fecha_Termino }}</td>
										<td >{{ $tratamiento->Descripcion_Tratamiento }}</td>
										<td >{{ $tratamiento->Observaciones }}</td>
										<td >{{ $tratamiento->veterinario_id }}</td>
										<td >{{ $tratamiento->movimiento_id }}</td>

                                            <td>
                                                <form action="{{ route('tratamientos.destroy', $tratamiento->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('tratamientos.show', $tratamiento->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('tratamientos.edit', $tratamiento->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
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
                {!! $tratamientos->withQueryString()->links() !!}
            </div>
        </div>
    </div>
@endsection
