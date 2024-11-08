<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class HistorialMedico
 *
 * @property $Historial_Medico_ID
 * @property $Fecha
 * @property $Descripcion
 * @property $id_atencion
 * @property $examen_id
 * @property $vacunas_id
 * @property $citas_id
 * @property $mascota_id
 * @property $veterinario_id
 * @property $tratamiento_id
 * @property $movimiento_id
 * @property $desparacitacion_id
 *
 * @property HistorialExamene $historialExamene
 * @property Vacuna $vacuna
 * @property Cita $cita
 * @property Mascota $mascota
 * @property Veterinario $veterinario
 * @property Tratamiento $tratamiento
 * @property RegistroMovimientoInventario $registroMovimientoInventario
 * @property HistorialDesparacitacione $historialDesparacitacione
 * @property ArchivosAdjunto[] $archivosAdjuntos
 * @property Cita[] $citas
 * @property Mascota[] $mascotas
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class HistorialMedico extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['Historial_Medico_ID', 'Fecha', 'Descripcion', 'id_atencion', 'examen_id', 'vacunas_id', 'citas_id', 'mascota_id', 'veterinario_id', 'tratamiento_id', 'movimiento_id', 'desparacitacion_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function historialExamene()
    {
        return $this->belongsTo(\App\Models\HistorialExamene::class, 'examen_id', 'Examen_ID');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function vacuna()
    {
        return $this->belongsTo(\App\Models\Vacuna::class, 'vacunas_id', 'Vacuna_ID');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function cita()
    {
        return $this->belongsTo(\App\Models\Cita::class, 'citas_id', 'Citas_ID');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function mascota()
    {
        return $this->belongsTo(\App\Models\Mascota::class, 'mascota_id', 'Mascota_ID');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function veterinario()
    {
        return $this->belongsTo(\App\Models\Veterinario::class, 'veterinario_id', 'Veterinario_ID');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function tratamiento()
    {
        return $this->belongsTo(\App\Models\Tratamiento::class, 'tratamiento_id', 'Tratamiento_ID');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function registroMovimientoInventario()
    {
        return $this->belongsTo(\App\Models\RegistroMovimientoInventario::class, 'movimiento_id', 'Movimiento_ID');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function historialDesparacitacione()
    {
        return $this->belongsTo(\App\Models\HistorialDesparacitacione::class, 'desparacitacion_id', 'Desparacitacion_ID');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function archivosAdjuntos()
    {
        return $this->hasMany(\App\Models\ArchivosAdjunto::class, 'Historial_Medico_ID', 'Historial_med_ID');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function citas()
    {
        return $this->hasMany(\App\Models\Cita::class, 'Historial_Medico_ID', 'historial_med_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function mascotas()
    {
        return $this->hasMany(\App\Models\Mascota::class, 'Historial_Medico_ID', 'historial_medico_id');
    }
    
}
