@extends('layouts.app')

@section('template_title')
    Inventario Insumos
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Inventario Insumos') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('inventario-insumos.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
									<th >Descripcion</th>
									<th >Cantidad</th>
									<th >Proveedor</th>
									<th >Fecha Ingreso</th>
									<th >Fecha Caducidad</th>
									<th >Costo Monetareo</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($inventarioInsumos as $inventarioInsumo)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
										<td >{{ $inventarioInsumo->ID }}</td>
										<td >{{ $inventarioInsumo->Nombre }}</td>
										<td >{{ $inventarioInsumo->Descripcion }}</td>
										<td >{{ $inventarioInsumo->Cantidad }}</td>
										<td >{{ $inventarioInsumo->Proveedor }}</td>
										<td >{{ $inventarioInsumo->Fecha_Ingreso }}</td>
										<td >{{ $inventarioInsumo->Fecha_Caducidad }}</td>
										<td >{{ $inventarioInsumo->Costo_Monetareo }}</td>

                                            <td>
                                                <form action="{{ route('inventario-insumos.destroy', $inventarioInsumo->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('inventario-insumos.show', $inventarioInsumo->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('inventario-insumos.edit', $inventarioInsumo->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
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
                {!! $inventarioInsumos->withQueryString()->links() !!}
            </div>
        </div>
    </div>
@endsection
