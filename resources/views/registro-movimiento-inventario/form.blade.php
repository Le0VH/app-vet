<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="fecha" class="form-label">{{ __('Fecha') }}</label>
            <input type="text" name="Fecha" class="form-control @error('Fecha') is-invalid @enderror" value="{{ old('Fecha', $registroMovimientoInventario?->Fecha) }}" id="fecha" placeholder="Fecha">
            {!! $errors->first('Fecha', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="cantidad" class="form-label">{{ __('Cantidad') }}</label>
            <input type="text" name="Cantidad" class="form-control @error('Cantidad') is-invalid @enderror" value="{{ old('Cantidad', $registroMovimientoInventario?->Cantidad) }}" id="cantidad" placeholder="Cantidad">
            {!! $errors->first('Cantidad', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="tipo__movimiento" class="form-label">{{ __('Tipo Movimiento') }}</label>
            <input type="text" name="Tipo_Movimiento" class="form-control @error('Tipo_Movimiento') is-invalid @enderror" value="{{ old('Tipo_Movimiento', $registroMovimientoInventario?->Tipo_Movimiento) }}" id="tipo__movimiento" placeholder="Tipo Movimiento">
            {!! $errors->first('Tipo_Movimiento', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="descripcion" class="form-label">{{ __('Descripcion') }}</label>
            <input type="text" name="Descripcion" class="form-control @error('Descripcion') is-invalid @enderror" value="{{ old('Descripcion', $registroMovimientoInventario?->Descripcion) }}" id="descripcion" placeholder="Descripcion">
            {!! $errors->first('Descripcion', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="inventario_id" class="form-label">{{ __('Inventario Id') }}</label>
            <input type="text" name="inventario_id" class="form-control @error('inventario_id') is-invalid @enderror" value="{{ old('inventario_id', $registroMovimientoInventario?->inventario_id) }}" id="inventario_id" placeholder="Inventario Id">
            {!! $errors->first('inventario_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>