<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="vacuna__i_d" class="form-label">{{ __('Vacuna Id') }}</label>
            <input type="text" name="Vacuna_ID" class="form-control @error('Vacuna_ID') is-invalid @enderror" value="{{ old('Vacuna_ID', $vacuna?->Vacuna_ID) }}" id="vacuna__i_d" placeholder="Vacuna Id">
            {!! $errors->first('Vacuna_ID', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="nombre__vacuna" class="form-label">{{ __('Nombre Vacuna') }}</label>
            <input type="text" name="Nombre_Vacuna" class="form-control @error('Nombre_Vacuna') is-invalid @enderror" value="{{ old('Nombre_Vacuna', $vacuna?->Nombre_Vacuna) }}" id="nombre__vacuna" placeholder="Nombre Vacuna">
            {!! $errors->first('Nombre_Vacuna', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="fecha" class="form-label">{{ __('Fecha') }}</label>
            <input type="text" name="Fecha" class="form-control @error('Fecha') is-invalid @enderror" value="{{ old('Fecha', $vacuna?->Fecha) }}" id="fecha" placeholder="Fecha">
            {!! $errors->first('Fecha', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="dosis" class="form-label">{{ __('Dosis') }}</label>
            <input type="text" name="Dosis" class="form-control @error('Dosis') is-invalid @enderror" value="{{ old('Dosis', $vacuna?->Dosis) }}" id="dosis" placeholder="Dosis">
            {!! $errors->first('Dosis', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="observaciones" class="form-label">{{ __('Observaciones') }}</label>
            <input type="text" name="Observaciones" class="form-control @error('Observaciones') is-invalid @enderror" value="{{ old('Observaciones', $vacuna?->Observaciones) }}" id="observaciones" placeholder="Observaciones">
            {!! $errors->first('Observaciones', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="laboratorio" class="form-label">{{ __('Laboratorio') }}</label>
            <input type="text" name="Laboratorio" class="form-control @error('Laboratorio') is-invalid @enderror" value="{{ old('Laboratorio', $vacuna?->Laboratorio) }}" id="laboratorio" placeholder="Laboratorio">
            {!! $errors->first('Laboratorio', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="mascota_id" class="form-label">{{ __('Mascota Id') }}</label>
            <input type="text" name="mascota_id" class="form-control @error('mascota_id') is-invalid @enderror" value="{{ old('mascota_id', $vacuna?->mascota_id) }}" id="mascota_id" placeholder="Mascota Id">
            {!! $errors->first('mascota_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="veterinario_id" class="form-label">{{ __('Veterinario Id') }}</label>
            <input type="text" name="veterinario_id" class="form-control @error('veterinario_id') is-invalid @enderror" value="{{ old('veterinario_id', $vacuna?->veterinario_id) }}" id="veterinario_id" placeholder="Veterinario Id">
            {!! $errors->first('veterinario_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>