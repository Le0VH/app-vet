<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="veterinario__i_d" class="form-label">{{ __('Veterinario Id') }}</label>
            <input type="text" name="Veterinario_ID" class="form-control @error('Veterinario_ID') is-invalid @enderror" value="{{ old('Veterinario_ID', $veterinario?->Veterinario_ID) }}" id="veterinario__i_d" placeholder="Veterinario Id">
            {!! $errors->first('Veterinario_ID', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="nombre__veterinario" class="form-label">{{ __('Nombre Veterinario') }}</label>
            <input type="text" name="Nombre_Veterinario" class="form-control @error('Nombre_Veterinario') is-invalid @enderror" value="{{ old('Nombre_Veterinario', $veterinario?->Nombre_Veterinario) }}" id="nombre__veterinario" placeholder="Nombre Veterinario">
            {!! $errors->first('Nombre_Veterinario', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="apellido__veterinario" class="form-label">{{ __('Apellido Veterinario') }}</label>
            <input type="text" name="Apellido_Veterinario" class="form-control @error('Apellido_Veterinario') is-invalid @enderror" value="{{ old('Apellido_Veterinario', $veterinario?->Apellido_Veterinario) }}" id="apellido__veterinario" placeholder="Apellido Veterinario">
            {!! $errors->first('Apellido_Veterinario', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="especialialidad__veterinario" class="form-label">{{ __('Especialialidad Veterinario') }}</label>
            <input type="text" name="Especialialidad_Veterinario" class="form-control @error('Especialialidad_Veterinario') is-invalid @enderror" value="{{ old('Especialialidad_Veterinario', $veterinario?->Especialialidad_Veterinario) }}" id="especialialidad__veterinario" placeholder="Especialialidad Veterinario">
            {!! $errors->first('Especialialidad_Veterinario', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="direccion__veterinario" class="form-label">{{ __('Direccion Veterinario') }}</label>
            <input type="text" name="Direccion_Veterinario" class="form-control @error('Direccion_Veterinario') is-invalid @enderror" value="{{ old('Direccion_Veterinario', $veterinario?->Direccion_Veterinario) }}" id="direccion__veterinario" placeholder="Direccion Veterinario">
            {!! $errors->first('Direccion_Veterinario', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="telefono__veterinario" class="form-label">{{ __('Telefono Veterinario') }}</label>
            <input type="text" name="telefono_Veterinario" class="form-control @error('telefono_Veterinario') is-invalid @enderror" value="{{ old('telefono_Veterinario', $veterinario?->telefono_Veterinario) }}" id="telefono__veterinario" placeholder="Telefono Veterinario">
            {!! $errors->first('telefono_Veterinario', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="contacto__emergencia__vet" class="form-label">{{ __('Contacto Emergencia Vet') }}</label>
            <input type="text" name="Contacto_Emergencia_Vet" class="form-control @error('Contacto_Emergencia_Vet') is-invalid @enderror" value="{{ old('Contacto_Emergencia_Vet', $veterinario?->Contacto_Emergencia_Vet) }}" id="contacto__emergencia__vet" placeholder="Contacto Emergencia Vet">
            {!! $errors->first('Contacto_Emergencia_Vet', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="email__veterinario" class="form-label">{{ __('Email Veterinario') }}</label>
            <input type="text" name="Email_Veterinario" class="form-control @error('Email_Veterinario') is-invalid @enderror" value="{{ old('Email_Veterinario', $veterinario?->Email_Veterinario) }}" id="email__veterinario" placeholder="Email Veterinario">
            {!! $errors->first('Email_Veterinario', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="clinicas" class="form-label">{{ __('Clinicas') }}</label>
            <input type="text" name="Clinicas" class="form-control @error('Clinicas') is-invalid @enderror" value="{{ old('Clinicas', $veterinario?->Clinicas) }}" id="clinicas" placeholder="Clinicas">
            {!! $errors->first('Clinicas', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>