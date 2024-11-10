<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="fecha" class="form-label">{{ __('Fecha') }}</label>
            <input type="text" name="Fecha" class="form-control @error('Fecha') is-invalid @enderror" value="{{ old('Fecha', $historialDesparacitacione?->Fecha) }}" id="fecha" placeholder="Fecha">
            {!! $errors->first('Fecha', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="observaciones" class="form-label">{{ __('Observaciones') }}</label>
            <input type="text" name="Observaciones" class="form-control @error('Observaciones') is-invalid @enderror" value="{{ old('Observaciones', $historialDesparacitacione?->Observaciones) }}" id="observaciones" placeholder="Observaciones">
            {!! $errors->first('Observaciones', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="movimiento_id" class="form-label">{{ __('Movimiento Id') }}</label>
            <input type="text" name="movimiento_id" class="form-control @error('movimiento_id') is-invalid @enderror" value="{{ old('movimiento_id', $historialDesparacitacione?->movimiento_id) }}" id="movimiento_id" placeholder="Movimiento Id">
            {!! $errors->first('movimiento_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="seguimiento_id" class="form-label">{{ __('Seguimiento Id') }}</label>
            <input type="text" name="seguimiento_id" class="form-control @error('seguimiento_id') is-invalid @enderror" value="{{ old('seguimiento_id', $historialDesparacitacione?->seguimiento_id) }}" id="seguimiento_id" placeholder="Seguimiento Id">
            {!! $errors->first('seguimiento_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>