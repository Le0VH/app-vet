<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Veterinario
 *
 * @property $ID
 * @property $Nombre_Veterinario
 * @property $Apellido_Veterinario
 * @property $Especialialidad_Veterinario
 * @property $Direccion_Veterinario
 * @property $telefono_Veterinario
 * @property $Contacto_Emergencia_Vet
 * @property $Email_Veterinario
 * @property $Clinicas
 *
 * @property ArchivosAdjunto[] $archivosAdjuntos
 * @property Cita[] $citas
 * @property HistorialExamene[] $historialExamenes
 * @property HistorialMedico[] $historialMedicos
 * @property Mascota[] $mascotas
 * @property Notificacione[] $notificaciones
 * @property PlantillaNotificacion[] $plantillaNotificacions
 * @property Tratamiento[] $tratamientos
 * @property Vacuna[] $vacunas
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Veterinario extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['ID', 'Nombre_Veterinario', 'Apellido_Veterinario', 'Especialialidad_Veterinario', 'Direccion_Veterinario', 'telefono_Veterinario', 'Contacto_Emergencia_Vet', 'Email_Veterinario', 'Clinicas'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function archivosAdjuntos()
    {
        return $this->hasMany(\App\Models\ArchivosAdjunto::class, 'ID', 'veterinario_ID');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function citas()
    {
        return $this->hasMany(\App\Models\Cita::class, 'ID', 'veterinario_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function historialExamenes()
    {
        return $this->hasMany(\App\Models\HistorialExamene::class, 'ID', 'veterinario_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function historialMedicos()
    {
        return $this->hasMany(\App\Models\HistorialMedico::class, 'ID', 'veterinario_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function mascotas()
    {
        return $this->hasMany(\App\Models\Mascota::class, 'ID', 'veterinario_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function notificaciones()
    {
        return $this->hasMany(\App\Models\Notificacione::class, 'ID', 'veterinario_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function plantillaNotificacions()
    {
        return $this->hasMany(\App\Models\PlantillaNotificacion::class, 'ID', 'veterinario_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function tratamientos()
    {
        return $this->hasMany(\App\Models\Tratamiento::class, 'ID', 'veterinario_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function vacunas()
    {
        return $this->hasMany(\App\Models\Vacuna::class, 'ID', 'veterinario_id');
    }
    
}
