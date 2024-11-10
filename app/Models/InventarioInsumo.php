<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class InventarioInsumo
 *
 * @property $ID
 * @property $Nombre
 * @property $Descripcion
 * @property $Cantidad
 * @property $Proveedor
 * @property $Fecha_Ingreso
 * @property $Fecha_Caducidad
 * @property $Costo_Monetareo
 *
 * @property RegistroMovimientoInventario[] $registroMovimientoInventarios
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class InventarioInsumo extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['ID', 'Nombre', 'Descripcion', 'Cantidad', 'Proveedor', 'Fecha_Ingreso', 'Fecha_Caducidad', 'Costo_Monetareo'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function registroMovimientoInventarios()
    {
        return $this->hasMany(\App\Models\RegistroMovimientoInventario::class, 'ID', 'inventario_id');
    }
    
}
