<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Traits\HasRoles;

/**
 * Class User
 *
 * @property $id
 * @property $name
 * @property $lastnames
 * @property $email
 * @property $email_verified_at
 * @property $phone
 * @property $rol
 * @property $password
 * @property $remember_token
 * @property $created_at
 * @property $updated_at
 *
 * @property ArchivosAdjunto[] $archivosAdjuntos
 * @property Cita[] $citas
 * @property Mascota[] $mascotas
 * @property Notificacione[] $notificaciones
 * @property PlantillaNotificacion[] $plantillaNotificacions
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    use HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function archivosAdjuntos()
    {
        return $this->hasMany(\App\Models\ArchivosAdjunto::class, 'id', 'usuario_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function citas()
    {
        return $this->hasMany(\App\Models\Cita::class, 'id', 'usuario_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function mascotas()
    {
        return $this->hasMany(\App\Models\Mascota::class, 'id', 'id_dueño');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function notificaciones()
    {
        return $this->hasMany(\App\Models\Notificacione::class, 'id', 'usuario_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function plantillaNotificacions()
    {
        return $this->hasMany(\App\Models\PlantillaNotificacion::class, 'id', 'usuario_id');
    }
}
