<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Tratamiento
 *
 * @property $Tratamiento_ID
 * @property $Fecha_Inicio
 * @property $Fecha_Termino
 * @property $Descripcion_Tratamiento
 * @property $Observaciones
 * @property $veterinario_id
 * @property $movimiento_id
 *
 * @property Veterinario $veterinario
 * @property RegistroMovimientoInventario $registroMovimientoInventario
 * @property HistorialMedico[] $historialMedicos
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Tratamiento extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['Tratamiento_ID', 'Fecha_Inicio', 'Fecha_Termino', 'Descripcion_Tratamiento', 'Observaciones', 'veterinario_id', 'movimiento_id'];


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
    public function registroMovimientoInventario()
    {
        return $this->belongsTo(\App\Models\RegistroMovimientoInventario::class, 'movimiento_id', 'Movimiento_ID');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function historialMedicos()
    {
        return $this->hasMany(\App\Models\HistorialMedico::class, 'Tratamiento_ID', 'tratamiento_id');
    }
    
}
