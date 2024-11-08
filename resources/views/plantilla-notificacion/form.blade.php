<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="pantilla__i_d" class="form-label">{{ __('Pantilla Id') }}</label>
            <input type="text" name="Pantilla_ID" class="form-control @error('Pantilla_ID') is-invalid @enderror" value="{{ old('Pantilla_ID', $plantillaNotificacion?->Pantilla_ID) }}" id="pantilla__i_d" placeholder="Pantilla Id">
            {!! $errors->first('Pantilla_ID', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="nombre" class="form-label">{{ __('Nombre') }}</label>
            <input type="text" name="Nombre" class="form-control @error('Nombre') is-invalid @enderror" value="{{ old('Nombre', $plantillaNotificacion?->Nombre) }}" id="nombre" placeholder="Nombre">
            {!! $errors->first('Nombre', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="tipo__notificacion" class="form-label">{{ __('Tipo Notificacion') }}</label>
            <input type="text" name="Tipo_Notificacion" class="form-control @error('Tipo_Notificacion') is-invalid @enderror" value="{{ old('Tipo_Notificacion', $plantillaNotificacion?->Tipo_Notificacion) }}" id="tipo__notificacion" placeholder="Tipo Notificacion">
            {!! $errors->first('Tipo_Notificacion', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="contenido" class="form-label">{{ __('Contenido') }}</label>
            <input type="text" name="Contenido" class="form-control @error('Contenido') is-invalid @enderror" value="{{ old('Contenido', $plantillaNotificacion?->Contenido) }}" id="contenido" placeholder="Contenido">
            {!! $errors->first('Contenido', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="notificacion_id" class="form-label">{{ __('Notificacion Id') }}</label>
            <input type="text" name="notificacion_id" class="form-control @error('notificacion_id') is-invalid @enderror" value="{{ old('notificacion_id', $plantillaNotificacion?->notificacion_id) }}" id="notificacion_id" placeholder="Notificacion Id">
            {!! $errors->first('notificacion_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="veterinario_id" class="form-label">{{ __('Veterinario Id') }}</label>
            <input type="text" name="veterinario_id" class="form-control @error('veterinario_id') is-invalid @enderror" value="{{ old('veterinario_id', $plantillaNotificacion?->veterinario_id) }}" id="veterinario_id" placeholder="Veterinario Id">
            {!! $errors->first('veterinario_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="usuario_id" class="form-label">{{ __('Usuario Id') }}</label>
            <input type="text" name="usuario_id" class="form-control @error('usuario_id') is-invalid @enderror" value="{{ old('usuario_id', $plantillaNotificacion?->usuario_id) }}" id="usuario_id" placeholder="Usuario Id">
            {!! $errors->first('usuario_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>