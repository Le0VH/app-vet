<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="i_d" class="form-label">{{ __('Id') }}</label>
            <input type="text" name="ID" class="form-control @error('ID') is-invalid @enderror" value="{{ old('ID', $cita?->ID) }}" id="i_d" placeholder="Id">
            {!! $errors->first('ID', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="fecha__cita" class="form-label">{{ __('Fecha Cita') }}</label>
            <input type="text" name="Fecha_Cita" class="form-control @error('Fecha_Cita') is-invalid @enderror" value="{{ old('Fecha_Cita', $cita?->Fecha_Cita) }}" id="fecha__cita" placeholder="Fecha Cita">
            {!! $errors->first('Fecha_Cita', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="hora__cita" class="form-label">{{ __('Hora Cita') }}</label>
            <input type="text" name="Hora_Cita" class="form-control @error('Hora_Cita') is-invalid @enderror" value="{{ old('Hora_Cita', $cita?->Hora_Cita) }}" id="hora__cita" placeholder="Hora Cita">
            {!! $errors->first('Hora_Cita', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="motivo__cita" class="form-label">{{ __('Motivo Cita') }}</label>
            <input type="text" name="Motivo_Cita" class="form-control @error('Motivo_Cita') is-invalid @enderror" value="{{ old('Motivo_Cita', $cita?->Motivo_Cita) }}" id="motivo__cita" placeholder="Motivo Cita">
            {!! $errors->first('Motivo_Cita', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="estado__cita" class="form-label">{{ __('Estado Cita') }}</label>
            <input type="text" name="Estado_Cita" class="form-control @error('Estado_Cita') is-invalid @enderror" value="{{ old('Estado_Cita', $cita?->Estado_Cita) }}" id="estado__cita" placeholder="Estado Cita">
            {!! $errors->first('Estado_Cita', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="tipo__de__pago" class="form-label">{{ __('Tipo De Pago') }}</label>
            <input type="text" name="Tipo_De_Pago" class="form-control @error('Tipo_De_Pago') is-invalid @enderror" value="{{ old('Tipo_De_Pago', $cita?->Tipo_De_Pago) }}" id="tipo__de__pago" placeholder="Tipo De Pago">
            {!! $errors->first('Tipo_De_Pago', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="mascota_id" class="form-label">{{ __('Mascota Id') }}</label>
            <input type="text" name="mascota_id" class="form-control @error('mascota_id') is-invalid @enderror" value="{{ old('mascota_id', $cita?->mascota_id) }}" id="mascota_id" placeholder="Mascota Id">
            {!! $errors->first('mascota_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="historial_med_id" class="form-label">{{ __('Historial Med Id') }}</label>
            <input type="text" name="historial_med_id" class="form-control @error('historial_med_id') is-invalid @enderror" value="{{ old('historial_med_id', $cita?->historial_med_id) }}" id="historial_med_id" placeholder="Historial Med Id">
            {!! $errors->first('historial_med_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="usuario_id" class="form-label">{{ __('Usuario Id') }}</label>
            <input type="text" name="usuario_id" class="form-control @error('usuario_id') is-invalid @enderror" value="{{ old('usuario_id', $cita?->usuario_id) }}" id="usuario_id" placeholder="Usuario Id">
            {!! $errors->first('usuario_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="veterinario_id" class="form-label">{{ __('Veterinario Id') }}</label>
            <input type="text" name="veterinario_id" class="form-control @error('veterinario_id') is-invalid @enderror" value="{{ old('veterinario_id', $cita?->veterinario_id) }}" id="veterinario_id" placeholder="Veterinario Id">
            {!! $errors->first('veterinario_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="seguimiento_id" class="form-label">{{ __('Seguimiento Id') }}</label>
            <input type="text" name="seguimiento_id" class="form-control @error('seguimiento_id') is-invalid @enderror" value="{{ old('seguimiento_id', $cita?->seguimiento_id) }}" id="seguimiento_id" placeholder="Seguimiento Id">
            {!! $errors->first('seguimiento_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>