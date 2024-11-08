@extends('layouts.app')

@section('template_title')
    Vacunas
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Vacunas') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('vacunas.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
									<th >Vacuna Id</th>
									<th >Nombre Vacuna</th>
									<th >Fecha</th>
									<th >Dosis</th>
									<th >Observaciones</th>
									<th >Laboratorio</th>
									<th >Mascota Id</th>
									<th >Veterinario Id</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($vacunas as $vacuna)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
										<td >{{ $vacuna->Vacuna_ID }}</td>
										<td >{{ $vacuna->Nombre_Vacuna }}</td>
										<td >{{ $vacuna->Fecha }}</td>
										<td >{{ $vacuna->Dosis }}</td>
										<td >{{ $vacuna->Observaciones }}</td>
										<td >{{ $vacuna->Laboratorio }}</td>
										<td >{{ $vacuna->mascota_id }}</td>
										<td >{{ $vacuna->veterinario_id }}</td>

                                            <td>
                                                <form action="{{ route('vacunas.destroy', $vacuna->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('vacunas.show', $vacuna->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('vacunas.edit', $vacuna->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
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
                {!! $vacunas->withQueryString()->links() !!}
            </div>
        </div>
    </div>
@endsection
