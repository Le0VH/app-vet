<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="tipo__notificacion" class="form-label">{{ __('Tipo Notificacion') }}</label>
            <input type="text" name="Tipo_Notificacion" class="form-control @error('Tipo_Notificacion') is-invalid @enderror" value="{{ old('Tipo_Notificacion', $notificacione?->Tipo_Notificacion) }}" id="tipo__notificacion" placeholder="Tipo Notificacion">
            {!! $errors->first('Tipo_Notificacion', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="fecha" class="form-label">{{ __('Fecha') }}</label>
            <input type="text" name="Fecha" class="form-control @error('Fecha') is-invalid @enderror" value="{{ old('Fecha', $notificacione?->Fecha) }}" id="fecha" placeholder="Fecha">
            {!! $errors->first('Fecha', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="hora" class="form-label">{{ __('Hora') }}</label>
            <input type="text" name="Hora" class="form-control @error('Hora') is-invalid @enderror" value="{{ old('Hora', $notificacione?->Hora) }}" id="hora" placeholder="Hora">
            {!! $errors->first('Hora', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="mensaje" class="form-label">{{ __('Mensaje') }}</label>
            <input type="text" name="Mensaje" class="form-control @error('Mensaje') is-invalid @enderror" value="{{ old('Mensaje', $notificacione?->Mensaje) }}" id="mensaje" placeholder="Mensaje">
            {!! $errors->first('Mensaje', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="estado__mensaje" class="form-label">{{ __('Estado Mensaje') }}</label>
            <input type="text" name="Estado_Mensaje" class="form-control @error('Estado_Mensaje') is-invalid @enderror" value="{{ old('Estado_Mensaje', $notificacione?->Estado_Mensaje) }}" id="estado__mensaje" placeholder="Estado Mensaje">
            {!! $errors->first('Estado_Mensaje', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="veterinario_id" class="form-label">{{ __('Veterinario Id') }}</label>
            <input type="text" name="veterinario_id" class="form-control @error('veterinario_id') is-invalid @enderror" value="{{ old('veterinario_id', $notificacione?->veterinario_id) }}" id="veterinario_id" placeholder="Veterinario Id">
            {!! $errors->first('veterinario_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="usuario_id" class="form-label">{{ __('Usuario Id') }}</label>
            <input type="text" name="usuario_id" class="form-control @error('usuario_id') is-invalid @enderror" value="{{ old('usuario_id', $notificacione?->usuario_id) }}" id="usuario_id" placeholder="Usuario Id">
            {!! $errors->first('usuario_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>