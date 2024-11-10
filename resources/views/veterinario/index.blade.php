@extends('layouts.app')

@section('template_title')
    Veterinarios
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Veterinarios') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('veterinarios.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
									<th >Nombre Veterinario</th>
									<th >Apellido Veterinario</th>
									<th >Especialialidad Veterinario</th>
									<th >Direccion Veterinario</th>
									<th >Telefono Veterinario</th>
									<th >Contacto Emergencia Vet</th>
									<th >Email Veterinario</th>
									<th >Clinicas</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($veterinarios as $veterinario)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
										<td >{{ $veterinario->ID }}</td>
										<td >{{ $veterinario->Nombre_Veterinario }}</td>
										<td >{{ $veterinario->Apellido_Veterinario }}</td>
										<td >{{ $veterinario->Especialialidad_Veterinario }}</td>
										<td >{{ $veterinario->Direccion_Veterinario }}</td>
										<td >{{ $veterinario->telefono_Veterinario }}</td>
										<td >{{ $veterinario->Contacto_Emergencia_Vet }}</td>
										<td >{{ $veterinario->Email_Veterinario }}</td>
										<td >{{ $veterinario->Clinicas }}</td>

                                            <td>
                                                <form action="{{ route('veterinarios.destroy', $veterinario->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('veterinarios.show', $veterinario->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('veterinarios.edit', $veterinario->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
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
                {!! $veterinarios->withQueryString()->links() !!}
            </div>
        </div>
    </div>
@endsection
