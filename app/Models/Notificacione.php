<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Notificacione
 *
 * @property $Notificaciones_ID
 * @property $Tipo_Notificacion
 * @property $Fecha
 * @property $Hora
 * @property $Mensaje
 * @property $Estado_Mensaje
 * @property $veterinario_id
 * @property $usuario_id
 *
 * @property Veterinario $veterinario
 * @property User $user
 * @property PlantillaNotificacion[] $plantillaNotificacions
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Notificacione extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['Notificaciones_ID', 'Tipo_Notificacion', 'Fecha', 'Hora', 'Mensaje', 'Estado_Mensaje', 'veterinario_id', 'usuario_id'];


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
    public function user()
    {
        return $this->belongsTo(\App\Models\User::class, 'usuario_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function plantillaNotificacions()
    {
        return $this->hasMany(\App\Models\PlantillaNotificacion::class, 'Notificaciones_ID', 'notificacion_id');
    }
    
}
