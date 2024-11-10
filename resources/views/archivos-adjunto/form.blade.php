<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="nombre__archivo" class="form-label">{{ __('Nombre Archivo') }}</label>
            <input type="text" name="Nombre_Archivo" class="form-control @error('Nombre_Archivo') is-invalid @enderror" value="{{ old('Nombre_Archivo', $archivosAdjunto?->Nombre_Archivo) }}" id="nombre__archivo" placeholder="Nombre Archivo">
            {!! $errors->first('Nombre_Archivo', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="tipo__archivo" class="form-label">{{ __('Tipo Archivo') }}</label>
            <input type="text" name="Tipo_Archivo" class="form-control @error('Tipo_Archivo') is-invalid @enderror" value="{{ old('Tipo_Archivo', $archivosAdjunto?->Tipo_Archivo) }}" id="tipo__archivo" placeholder="Tipo Archivo">
            {!! $errors->first('Tipo_Archivo', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="fecha__archivo" class="form-label">{{ __('Fecha Archivo') }}</label>
            <input type="text" name="Fecha_Archivo" class="form-control @error('Fecha_Archivo') is-invalid @enderror" value="{{ old('Fecha_Archivo', $archivosAdjunto?->Fecha_Archivo) }}" id="fecha__archivo" placeholder="Fecha Archivo">
            {!! $errors->first('Fecha_Archivo', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="descripcion" class="form-label">{{ __('Descripcion') }}</label>
            <input type="text" name="Descripcion" class="form-control @error('Descripcion') is-invalid @enderror" value="{{ old('Descripcion', $archivosAdjunto?->Descripcion) }}" id="descripcion" placeholder="Descripcion">
            {!! $errors->first('Descripcion', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="veterinario__i_d" class="form-label">{{ __('Veterinario Id') }}</label>
            <input type="text" name="veterinario_ID" class="form-control @error('veterinario_ID') is-invalid @enderror" value="{{ old('veterinario_ID', $archivosAdjunto?->veterinario_ID) }}" id="veterinario__i_d" placeholder="Veterinario Id">
            {!! $errors->first('veterinario_ID', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="historial_med__i_d" class="form-label">{{ __('Historial Med Id') }}</label>
            <input type="text" name="Historial_med_ID" class="form-control @error('Historial_med_ID') is-invalid @enderror" value="{{ old('Historial_med_ID', $archivosAdjunto?->Historial_med_ID) }}" id="historial_med__i_d" placeholder="Historial Med Id">
            {!! $errors->first('Historial_med_ID', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="vacunas_id" class="form-label">{{ __('Vacunas Id') }}</label>
            <input type="text" name="vacunas_id" class="form-control @error('vacunas_id') is-invalid @enderror" value="{{ old('vacunas_id', $archivosAdjunto?->vacunas_id) }}" id="vacunas_id" placeholder="Vacunas Id">
            {!! $errors->first('vacunas_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="mascota_id" class="form-label">{{ __('Mascota Id') }}</label>
            <input type="text" name="mascota_id" class="form-control @error('mascota_id') is-invalid @enderror" value="{{ old('mascota_id', $archivosAdjunto?->mascota_id) }}" id="mascota_id" placeholder="Mascota Id">
            {!! $errors->first('mascota_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="usuario_id" class="form-label">{{ __('Usuario Id') }}</label>
            <input type="text" name="usuario_id" class="form-control @error('usuario_id') is-invalid @enderror" value="{{ old('usuario_id', $archivosAdjunto?->usuario_id) }}" id="usuario_id" placeholder="Usuario Id">
            {!! $errors->first('usuario_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>