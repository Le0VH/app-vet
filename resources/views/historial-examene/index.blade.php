@extends('layouts.app')

@section('template_title')
    Historial Examenes
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Historial Examenes') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('historial-examenes.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
									<th >Fecha</th>
									<th >Tipo Examen</th>
									<th >Resultado</th>
									<th >Observaciones</th>
									<th >Veterinario Id</th>
									<th >Mascota Id</th>
									<th >Citas Id</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($historialExamenes as $historialExamene)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
										<td >{{ $historialExamene->fecha }}</td>
										<td >{{ $historialExamene->Tipo_Examen }}</td>
										<td >{{ $historialExamene->Resultado }}</td>
										<td >{{ $historialExamene->Observaciones }}</td>
										<td >{{ $historialExamene->veterinario_id }}</td>
										<td >{{ $historialExamene->mascota_id }}</td>
										<td >{{ $historialExamene->citas_id }}</td>

                                            <td>
                                                <form action="{{ route('historial-examenes.destroy', $historialExamene->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('historial-examenes.show', $historialExamene->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('historial-examenes.edit', $historialExamene->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
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
                {!! $historialExamenes->withQueryString()->links() !!}
            </div>
        </div>
    </div>
@endsection
