<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="i_d" class="form-label">{{ __('Id') }}</label>
            <input type="text" name="ID" class="form-control @error('ID') is-invalid @enderror" value="{{ old('ID', $historialMedico?->ID) }}" id="i_d" placeholder="Id">
            {!! $errors->first('ID', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="fecha" class="form-label">{{ __('Fecha') }}</label>
            <input type="text" name="Fecha" class="form-control @error('Fecha') is-invalid @enderror" value="{{ old('Fecha', $historialMedico?->Fecha) }}" id="fecha" placeholder="Fecha">
            {!! $errors->first('Fecha', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="descripcion" class="form-label">{{ __('Descripcion') }}</label>
            <input type="text" name="Descripcion" class="form-control @error('Descripcion') is-invalid @enderror" value="{{ old('Descripcion', $historialMedico?->Descripcion) }}" id="descripcion" placeholder="Descripcion">
            {!! $errors->first('Descripcion', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="id_atencion" class="form-label">{{ __('Id Atencion') }}</label>
            <input type="text" name="id_atencion" class="form-control @error('id_atencion') is-invalid @enderror" value="{{ old('id_atencion', $historialMedico?->id_atencion) }}" id="id_atencion" placeholder="Id Atencion">
            {!! $errors->first('id_atencion', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="examen_id" class="form-label">{{ __('Examen Id') }}</label>
            <input type="text" name="examen_id" class="form-control @error('examen_id') is-invalid @enderror" value="{{ old('examen_id', $historialMedico?->examen_id) }}" id="examen_id" placeholder="Examen Id">
            {!! $errors->first('examen_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="vacunas_id" class="form-label">{{ __('Vacunas Id') }}</label>
            <input type="text" name="vacunas_id" class="form-control @error('vacunas_id') is-invalid @enderror" value="{{ old('vacunas_id', $historialMedico?->vacunas_id) }}" id="vacunas_id" placeholder="Vacunas Id">
            {!! $errors->first('vacunas_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="citas_id" class="form-label">{{ __('Citas Id') }}</label>
            <input type="text" name="citas_id" class="form-control @error('citas_id') is-invalid @enderror" value="{{ old('citas_id', $historialMedico?->citas_id) }}" id="citas_id" placeholder="Citas Id">
            {!! $errors->first('citas_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="mascota_id" class="form-label">{{ __('Mascota Id') }}</label>
            <input type="text" name="mascota_id" class="form-control @error('mascota_id') is-invalid @enderror" value="{{ old('mascota_id', $historialMedico?->mascota_id) }}" id="mascota_id" placeholder="Mascota Id">
            {!! $errors->first('mascota_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="veterinario_id" class="form-label">{{ __('Veterinario Id') }}</label>
            <input type="text" name="veterinario_id" class="form-control @error('veterinario_id') is-invalid @enderror" value="{{ old('veterinario_id', $historialMedico?->veterinario_id) }}" id="veterinario_id" placeholder="Veterinario Id">
            {!! $errors->first('veterinario_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="tratamiento_id" class="form-label">{{ __('Tratamiento Id') }}</label>
            <input type="text" name="tratamiento_id" class="form-control @error('tratamiento_id') is-invalid @enderror" value="{{ old('tratamiento_id', $historialMedico?->tratamiento_id) }}" id="tratamiento_id" placeholder="Tratamiento Id">
            {!! $errors->first('tratamiento_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="movimiento_id" class="form-label">{{ __('Movimiento Id') }}</label>
            <input type="text" name="movimiento_id" class="form-control @error('movimiento_id') is-invalid @enderror" value="{{ old('movimiento_id', $historialMedico?->movimiento_id) }}" id="movimiento_id" placeholder="Movimiento Id">
            {!! $errors->first('movimiento_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="desparacitacion_id" class="form-label">{{ __('Desparacitacion Id') }}</label>
            <input type="text" name="desparacitacion_id" class="form-control @error('desparacitacion_id') is-invalid @enderror" value="{{ old('desparacitacion_id', $historialMedico?->desparacitacion_id) }}" id="desparacitacion_id" placeholder="Desparacitacion Id">
            {!! $errors->first('desparacitacion_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>