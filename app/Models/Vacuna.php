<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Vacuna
 *
 * @property $id
 * @property $Nombre_Vacuna
 * @property $Fecha
 * @property $Dosis
 * @property $Observaciones
 * @property $Laboratorio
 * @property $mascota_id
 * @property $veterinario_id
 *
 * @property Mascota $mascota
 * @property Veterinario $veterinario
 * @property ArchivosAdjunto[] $archivosAdjuntos
 * @property HistorialMedico[] $historialMedicos
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Vacuna extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['Nombre_Vacuna', 'Fecha', 'Dosis', 'Observaciones', 'Laboratorio', 'mascota_id', 'veterinario_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function mascota()
    {
        return $this->belongsTo(\App\Models\Mascota::class, 'mascota_id', 'ID');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function veterinario()
    {
        return $this->belongsTo(\App\Models\Veterinario::class, 'veterinario_id', 'ID');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function archivosAdjuntos()
    {
        return $this->hasMany(\App\Models\ArchivosAdjunto::class, 'ID', 'vacunas_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function historialMedicos()
    {
        return $this->hasMany(\App\Models\HistorialMedico::class, 'ID', 'vacunas_id');
    }
    
}
