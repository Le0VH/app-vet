<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="fecha__inicio" class="form-label">{{ __('Fecha Inicio') }}</label>
            <input type="text" name="Fecha_Inicio" class="form-control @error('Fecha_Inicio') is-invalid @enderror" value="{{ old('Fecha_Inicio', $tratamiento?->Fecha_Inicio) }}" id="fecha__inicio" placeholder="Fecha Inicio">
            {!! $errors->first('Fecha_Inicio', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="fecha__termino" class="form-label">{{ __('Fecha Termino') }}</label>
            <input type="text" name="Fecha_Termino" class="form-control @error('Fecha_Termino') is-invalid @enderror" value="{{ old('Fecha_Termino', $tratamiento?->Fecha_Termino) }}" id="fecha__termino" placeholder="Fecha Termino">
            {!! $errors->first('Fecha_Termino', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="descripcion__tratamiento" class="form-label">{{ __('Descripcion Tratamiento') }}</label>
            <input type="text" name="Descripcion_Tratamiento" class="form-control @error('Descripcion_Tratamiento') is-invalid @enderror" value="{{ old('Descripcion_Tratamiento', $tratamiento?->Descripcion_Tratamiento) }}" id="descripcion__tratamiento" placeholder="Descripcion Tratamiento">
            {!! $errors->first('Descripcion_Tratamiento', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="observaciones" class="form-label">{{ __('Observaciones') }}</label>
            <input type="text" name="Observaciones" class="form-control @error('Observaciones') is-invalid @enderror" value="{{ old('Observaciones', $tratamiento?->Observaciones) }}" id="observaciones" placeholder="Observaciones">
            {!! $errors->first('Observaciones', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="veterinario_id" class="form-label">{{ __('Veterinario Id') }}</label>
            <input type="text" name="veterinario_id" class="form-control @error('veterinario_id') is-invalid @enderror" value="{{ old('veterinario_id', $tratamiento?->veterinario_id) }}" id="veterinario_id" placeholder="Veterinario Id">
            {!! $errors->first('veterinario_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="movimiento_id" class="form-label">{{ __('Movimiento Id') }}</label>
            <input type="text" name="movimiento_id" class="form-control @error('movimiento_id') is-invalid @enderror" value="{{ old('movimiento_id', $tratamiento?->movimiento_id) }}" id="movimiento_id" placeholder="Movimiento Id">
            {!! $errors->first('movimiento_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>