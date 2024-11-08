<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="mascota__i_d" class="form-label">{{ __('Mascota Id') }}</label>
            <input type="text" name="Mascota_ID" class="form-control @error('Mascota_ID') is-invalid @enderror" value="{{ old('Mascota_ID', $mascota?->Mascota_ID) }}" id="mascota__i_d" placeholder="Mascota Id">
            {!! $errors->first('Mascota_ID', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="especie" class="form-label">{{ __('Especie') }}</label>
            <input type="text" name="Especie" class="form-control @error('Especie') is-invalid @enderror" value="{{ old('Especie', $mascota?->Especie) }}" id="especie" placeholder="Especie">
            {!! $errors->first('Especie', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="raza" class="form-label">{{ __('Raza') }}</label>
            <input type="text" name="Raza" class="form-control @error('Raza') is-invalid @enderror" value="{{ old('Raza', $mascota?->Raza) }}" id="raza" placeholder="Raza">
            {!! $errors->first('Raza', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="tipo__pelaje" class="form-label">{{ __('Tipo Pelaje') }}</label>
            <input type="text" name="Tipo_Pelaje" class="form-control @error('Tipo_Pelaje') is-invalid @enderror" value="{{ old('Tipo_Pelaje', $mascota?->Tipo_Pelaje) }}" id="tipo__pelaje" placeholder="Tipo Pelaje">
            {!! $errors->first('Tipo_Pelaje', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="color__pelaje" class="form-label">{{ __('Color Pelaje') }}</label>
            <input type="text" name="Color_Pelaje" class="form-control @error('Color_Pelaje') is-invalid @enderror" value="{{ old('Color_Pelaje', $mascota?->Color_Pelaje) }}" id="color__pelaje" placeholder="Color Pelaje">
            {!! $errors->first('Color_Pelaje', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="fecha__nacimiento" class="form-label">{{ __('Fecha Nacimiento') }}</label>
            <input type="text" name="Fecha_Nacimiento" class="form-control @error('Fecha_Nacimiento') is-invalid @enderror" value="{{ old('Fecha_Nacimiento', $mascota?->Fecha_Nacimiento) }}" id="fecha__nacimiento" placeholder="Fecha Nacimiento">
            {!! $errors->first('Fecha_Nacimiento', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="fecha__adopcion" class="form-label">{{ __('Fecha Adopcion') }}</label>
            <input type="text" name="Fecha_Adopcion" class="form-control @error('Fecha_Adopcion') is-invalid @enderror" value="{{ old('Fecha_Adopcion', $mascota?->Fecha_Adopcion) }}" id="fecha__adopcion" placeholder="Fecha Adopcion">
            {!! $errors->first('Fecha_Adopcion', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="peso" class="form-label">{{ __('Peso') }}</label>
            <input type="text" name="Peso" class="form-control @error('Peso') is-invalid @enderror" value="{{ old('Peso', $mascota?->Peso) }}" id="peso" placeholder="Peso">
            {!! $errors->first('Peso', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="tipificacion__sangre" class="form-label">{{ __('Tipificacion Sangre') }}</label>
            <input type="text" name="Tipificacion_Sangre" class="form-control @error('Tipificacion_Sangre') is-invalid @enderror" value="{{ old('Tipificacion_Sangre', $mascota?->Tipificacion_Sangre) }}" id="tipificacion__sangre" placeholder="Tipificacion Sangre">
            {!! $errors->first('Tipificacion_Sangre', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="numero__chip" class="form-label">{{ __('Numero Chip') }}</label>
            <input type="text" name="Numero_Chip" class="form-control @error('Numero_Chip') is-invalid @enderror" value="{{ old('Numero_Chip', $mascota?->Numero_Chip) }}" id="numero__chip" placeholder="Numero Chip">
            {!! $errors->first('Numero_Chip', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="castracion" class="form-label">{{ __('Castracion') }}</label>
            <input type="text" name="Castracion" class="form-control @error('Castracion') is-invalid @enderror" value="{{ old('Castracion', $mascota?->Castracion) }}" id="castracion" placeholder="Castracion">
            {!! $errors->first('Castracion', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="fecha__castracion" class="form-label">{{ __('Fecha Castracion') }}</label>
            <input type="text" name="Fecha_Castracion" class="form-control @error('Fecha_Castracion') is-invalid @enderror" value="{{ old('Fecha_Castracion', $mascota?->Fecha_Castracion) }}" id="fecha__castracion" placeholder="Fecha Castracion">
            {!! $errors->first('Fecha_Castracion', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="nombre_mascota" class="form-label">{{ __('Nombre Mascota') }}</label>
            <input type="text" name="nombre_mascota" class="form-control @error('nombre_mascota') is-invalid @enderror" value="{{ old('nombre_mascota', $mascota?->nombre_mascota) }}" id="nombre_mascota" placeholder="Nombre Mascota">
            {!! $errors->first('nombre_mascota', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="id_dueño" class="form-label">{{ __('Id Dueño') }}</label>
            <input type="text" name="id_dueño" class="form-control @error('id_dueño') is-invalid @enderror" value="{{ old('id_dueño', $mascota?->id_dueño) }}" id="id_dueño" placeholder="Id Dueño">
            {!! $errors->first('id_dueño', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="historial_medico_id" class="form-label">{{ __('Historial Medico Id') }}</label>
            <input type="text" name="historial_medico_id" class="form-control @error('historial_medico_id') is-invalid @enderror" value="{{ old('historial_medico_id', $mascota?->historial_medico_id) }}" id="historial_medico_id" placeholder="Historial Medico Id">
            {!! $errors->first('historial_medico_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="desparacitaciones_id" class="form-label">{{ __('Desparacitaciones Id') }}</label>
            <input type="text" name="desparacitaciones_id" class="form-control @error('desparacitaciones_id') is-invalid @enderror" value="{{ old('desparacitaciones_id', $mascota?->desparacitaciones_id) }}" id="desparacitaciones_id" placeholder="Desparacitaciones Id">
            {!! $errors->first('desparacitaciones_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="veterinario_id" class="form-label">{{ __('Veterinario Id') }}</label>
            <input type="text" name="veterinario_id" class="form-control @error('veterinario_id') is-invalid @enderror" value="{{ old('veterinario_id', $mascota?->veterinario_id) }}" id="veterinario_id" placeholder="Veterinario Id">
            {!! $errors->first('veterinario_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>