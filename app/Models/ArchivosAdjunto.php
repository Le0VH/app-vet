<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ArchivosAdjunto
 *
 * @property $Archivos_ID
 * @property $Nombre_Archivo
 * @property $Tipo_Archivo
 * @property $Fecha_Archivo
 * @property $Descripcion
 * @property $veterinario_ID
 * @property $Historial_med_ID
 * @property $vacunas_id
 * @property $mascota_id
 * @property $usuario_id
 *
 * @property Veterinario $veterinario
 * @property HistorialMedico $historialMedico
 * @property Vacuna $vacuna
 * @property Mascota $mascota
 * @property User $user
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class ArchivosAdjunto extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['Archivos_ID', 'Nombre_Archivo', 'Tipo_Archivo', 'Fecha_Archivo', 'Descripcion', 'veterinario_ID', 'Historial_med_ID', 'vacunas_id', 'mascota_id', 'usuario_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function veterinario()
    {
        return $this->belongsTo(\App\Models\Veterinario::class, 'veterinario_ID', 'Veterinario_ID');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function historialMedico()
    {
        return $this->belongsTo(\App\Models\HistorialMedico::class, 'Historial_med_ID', 'Historial_Medico_ID');
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
    public function mascota()
    {
        return $this->belongsTo(\App\Models\Mascota::class, 'mascota_id', 'Mascota_ID');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(\App\Models\User::class, 'usuario_id', 'id');
    }
    
}
