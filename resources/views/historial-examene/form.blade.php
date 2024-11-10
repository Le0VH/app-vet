<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="fecha" class="form-label">{{ __('Fecha') }}</label>
            <input type="text" name="fecha" class="form-control @error('fecha') is-invalid @enderror" value="{{ old('fecha', $historialExamene?->fecha) }}" id="fecha" placeholder="Fecha">
            {!! $errors->first('fecha', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="tipo__examen" class="form-label">{{ __('Tipo Examen') }}</label>
            <input type="text" name="Tipo_Examen" class="form-control @error('Tipo_Examen') is-invalid @enderror" value="{{ old('Tipo_Examen', $historialExamene?->Tipo_Examen) }}" id="tipo__examen" placeholder="Tipo Examen">
            {!! $errors->first('Tipo_Examen', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="resultado" class="form-label">{{ __('Resultado') }}</label>
            <input type="text" name="Resultado" class="form-control @error('Resultado') is-invalid @enderror" value="{{ old('Resultado', $historialExamene?->Resultado) }}" id="resultado" placeholder="Resultado">
            {!! $errors->first('Resultado', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="observaciones" class="form-label">{{ __('Observaciones') }}</label>
            <input type="text" name="Observaciones" class="form-control @error('Observaciones') is-invalid @enderror" value="{{ old('Observaciones', $historialExamene?->Observaciones) }}" id="observaciones" placeholder="Observaciones">
            {!! $errors->first('Observaciones', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="veterinario_id" class="form-label">{{ __('Veterinario Id') }}</label>
            <input type="text" name="veterinario_id" class="form-control @error('veterinario_id') is-invalid @enderror" value="{{ old('veterinario_id', $historialExamene?->veterinario_id) }}" id="veterinario_id" placeholder="Veterinario Id">
            {!! $errors->first('veterinario_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="mascota_id" class="form-label">{{ __('Mascota Id') }}</label>
            <input type="text" name="mascota_id" class="form-control @error('mascota_id') is-invalid @enderror" value="{{ old('mascota_id', $historialExamene?->mascota_id) }}" id="mascota_id" placeholder="Mascota Id">
            {!! $errors->first('mascota_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="citas_id" class="form-label">{{ __('Citas Id') }}</label>
            <input type="text" name="citas_id" class="form-control @error('citas_id') is-invalid @enderror" value="{{ old('citas_id', $historialExamene?->citas_id) }}" id="citas_id" placeholder="Citas Id">
            {!! $errors->first('citas_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>