<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class HistorialDesparacitacione
 *
 * @property $id
 * @property $Fecha
 * @property $Observaciones
 * @property $movimiento_id
 * @property $seguimiento_id
 *
 * @property RegistroMovimientoInventario $registroMovimientoInventario
 * @property Seguimiento $seguimiento
 * @property HistorialMedico[] $historialMedicos
 * @property Mascota[] $mascotas
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class HistorialDesparacitacione extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['Fecha', 'Observaciones', 'movimiento_id', 'seguimiento_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function registroMovimientoInventario()
    {
        return $this->belongsTo(\App\Models\RegistroMovimientoInventario::class, 'movimiento_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function seguimiento()
    {
        return $this->belongsTo(\App\Models\Seguimiento::class, 'seguimiento_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function historialMedicos()
    {
        return $this->hasMany(\App\Models\HistorialMedico::class, 'id', 'desparacitacion_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function mascotas()
    {
        return $this->hasMany(\App\Models\Mascota::class, 'id', 'desparacitaciones_id');
    }
    
}
