<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class PlantillaNotificacion
 *
 * @property $id
 * @property $Nombre
 * @property $Tipo_Notificacion
 * @property $Contenido
 * @property $notificacion_id
 * @property $veterinario_id
 * @property $usuario_id
 *
 * @property Notificacione $notificacione
 * @property Veterinario $veterinario
 * @property User $user
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class PlantillaNotificacion extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['Nombre', 'Tipo_Notificacion', 'Contenido', 'notificacion_id', 'veterinario_id', 'usuario_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function notificacione()
    {
        return $this->belongsTo(\App\Models\Notificacione::class, 'notificacion_id', 'ID');
    }
    
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
    public function user()
    {
        return $this->belongsTo(\App\Models\User::class, 'usuario_id', 'id');
    }
    
}
