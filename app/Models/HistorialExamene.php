<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class HistorialExamene
 *
 * @property $id
 * @property $fecha
 * @property $Tipo_Examen
 * @property $Resultado
 * @property $Observaciones
 * @property $veterinario_id
 * @property $mascota_id
 * @property $citas_id
 *
 * @property Veterinario $veterinario
 * @property Mascota $mascota
 * @property Cita $cita
 * @property HistorialMedico[] $historialMedicos
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class HistorialExamene extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['fecha', 'Tipo_Examen', 'Resultado', 'Observaciones', 'veterinario_id', 'mascota_id', 'citas_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function veterinario()
    {
        return $this->belongsTo(\App\Models\Veterinario::class, 'veterinario_id', 'ID');
    }
    
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
    public function cita()
    {
        return $this->belongsTo(\App\Models\Cita::class, 'citas_id', 'ID');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function historialMedicos()
    {
        return $this->hasMany(\App\Models\HistorialMedico::class, 'ID', 'examen_id');
    }
    
}
