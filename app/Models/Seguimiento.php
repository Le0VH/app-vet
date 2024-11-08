<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Seguimiento
 *
 * @property $seguimiento_id
 * @property $fecha
 * @property $peso
 * @property $observaciones
 * @property $mascota_id
 *
 * @property Mascota $mascota
 * @property Cita[] $citas
 * @property HistorialDesparacitacione[] $historialDesparacitaciones
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Seguimiento extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['seguimiento_id', 'fecha', 'peso', 'observaciones', 'mascota_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function mascota()
    {
        return $this->belongsTo(\App\Models\Mascota::class, 'mascota_id', 'Mascota_ID');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function citas()
    {
        return $this->hasMany(\App\Models\Cita::class, 'seguimiento_id', 'seguimiento_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function historialDesparacitaciones()
    {
        return $this->hasMany(\App\Models\HistorialDesparacitacione::class, 'seguimiento_id', 'seguimiento_id');
    }
    
}
