<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="nombre" class="form-label">{{ __('Nombre') }}</label>
            <input type="text" name="Nombre" class="form-control @error('Nombre') is-invalid @enderror" value="{{ old('Nombre', $inventarioInsumo?->Nombre) }}" id="nombre" placeholder="Nombre">
            {!! $errors->first('Nombre', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="descripcion" class="form-label">{{ __('Descripcion') }}</label>
            <input type="text" name="Descripcion" class="form-control @error('Descripcion') is-invalid @enderror" value="{{ old('Descripcion', $inventarioInsumo?->Descripcion) }}" id="descripcion" placeholder="Descripcion">
            {!! $errors->first('Descripcion', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="cantidad" class="form-label">{{ __('Cantidad') }}</label>
            <input type="text" name="Cantidad" class="form-control @error('Cantidad') is-invalid @enderror" value="{{ old('Cantidad', $inventarioInsumo?->Cantidad) }}" id="cantidad" placeholder="Cantidad">
            {!! $errors->first('Cantidad', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="proveedor" class="form-label">{{ __('Proveedor') }}</label>
            <input type="text" name="Proveedor" class="form-control @error('Proveedor') is-invalid @enderror" value="{{ old('Proveedor', $inventarioInsumo?->Proveedor) }}" id="proveedor" placeholder="Proveedor">
            {!! $errors->first('Proveedor', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="fecha__ingreso" class="form-label">{{ __('Fecha Ingreso') }}</label>
            <input type="text" name="Fecha_Ingreso" class="form-control @error('Fecha_Ingreso') is-invalid @enderror" value="{{ old('Fecha_Ingreso', $inventarioInsumo?->Fecha_Ingreso) }}" id="fecha__ingreso" placeholder="Fecha Ingreso">
            {!! $errors->first('Fecha_Ingreso', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="fecha__caducidad" class="form-label">{{ __('Fecha Caducidad') }}</label>
            <input type="text" name="Fecha_Caducidad" class="form-control @error('Fecha_Caducidad') is-invalid @enderror" value="{{ old('Fecha_Caducidad', $inventarioInsumo?->Fecha_Caducidad) }}" id="fecha__caducidad" placeholder="Fecha Caducidad">
            {!! $errors->first('Fecha_Caducidad', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="costo__monetareo" class="form-label">{{ __('Costo Monetareo') }}</label>
            <input type="text" name="Costo_Monetareo" class="form-control @error('Costo_Monetareo') is-invalid @enderror" value="{{ old('Costo_Monetareo', $inventarioInsumo?->Costo_Monetareo) }}" id="costo__monetareo" placeholder="Costo Monetareo">
            {!! $errors->first('Costo_Monetareo', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>