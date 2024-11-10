<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class RegistroMovimientoInventario
 *
 * @property $ID
 * @property $Fecha
 * @property $Cantidad
 * @property $Tipo_Movimiento
 * @property $Descripcion
 * @property $inventario_id
 *
 * @property InventarioInsumo $inventarioInsumo
 * @property HistorialDesparacitacione[] $historialDesparacitaciones
 * @property HistorialMedico[] $historialMedicos
 * @property Tratamiento[] $tratamientos
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class RegistroMovimientoInventario extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['ID', 'Fecha', 'Cantidad', 'Tipo_Movimiento', 'Descripcion', 'inventario_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function inventarioInsumo()
    {
        return $this->belongsTo(\App\Models\InventarioInsumo::class, 'inventario_id', 'ID');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function historialDesparacitaciones()
    {
        return $this->hasMany(\App\Models\HistorialDesparacitacione::class, 'ID', 'movimiento_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function historialMedicos()
    {
        return $this->hasMany(\App\Models\HistorialMedico::class, 'ID', 'movimiento_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function tratamientos()
    {
        return $this->hasMany(\App\Models\Tratamiento::class, 'ID', 'movimiento_id');
    }
    
}
