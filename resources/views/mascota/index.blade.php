@extends('layouts.base')

@section('template_title')
    Mascotas
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Mascotas') }}
                            </span>
                             <div class="float-right">
                                <a href="{{ route('mascotas.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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

                    <?php
                    $rol = Auth::user()->rol;
                        
                    if ($rol == 1 or 2): 
                    ?>
                    <input type="search" id="Mascotabusqueda" name="buscMascota" placeholder="Ingrese Rut..."/>
                    <button>Buscar</button>
                <?php
                    endif;
                ?>

                    <div class="card-body bg-white">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
									<th >Nombre Mascota</th>
									<th >Especie</th>
									<th >Raza</th>
									<th >Tipo Pelaje</th>
									<th >Color Pelaje</th>
									<th >Fecha Nacimiento</th>
									<th >Fecha Adopcion</th>
									<th >Peso</th>
									<th >Tipificacion Sangre</th>
									<th >Numero Chip</th>
									<th >Castracion</th>
									<th >Fecha Castracion</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($mascotas as $mascota)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
										<td >{{ $mascota->nombre_mascota }}</td>
										<td >{{ $mascota->Especie }}</td>
										<td >{{ $mascota->Raza }}</td>
										<td >{{ $mascota->Tipo_Pelaje }}</td>
										<td >{{ $mascota->Color_Pelaje }}</td>
										<td >{{ $mascota->Fecha_Nacimiento }}</td>
										<td >{{ $mascota->Fecha_Adopcion }}</td>
										<td >{{ $mascota->Peso }}</td>
										<td >{{ $mascota->Tipificacion_Sangre }}</td>
										<td >{{ $mascota->Numero_Chip }}</td>
										<td >{{ $mascota->Castracion }}</td>
										<td >{{ $mascota->Fecha_Castracion }}</td>

                                            <td>
                                                <form action="{{ route('mascotas.destroy', $mascota->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('mascotas.show', $mascota->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('mascotas.edit', $mascota->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('historial-medicos.index', $mascota->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Historial Medico') }}</a>
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
                {!! $mascotas->withQueryString()->links() !!}
            </div>
        </div>
    </div>
@endsection
