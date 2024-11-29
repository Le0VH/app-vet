<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Mascota
 *
 * @property $id
 * @property $nombre_mascota
 * @property $Especie
 * @property $Raza
 * @property $Tipo_Pelaje
 * @property $Color_Pelaje
 * @property $Fecha_Nacimiento
 * @property $Fecha_Adopcion
 * @property $Peso
 * @property $Tipificacion_Sangre
 * @property $Numero_Chip
 * @property $Castracion
 * @property $Fecha_Castracion
 * @property $id_dueño
 * @property $veterinario_id
 *
 * @property Veterinario $veterinario
 * @property User $user
 * @property ArchivosAdjunto[] $archivosAdjuntos
 * @property Cita[] $citas
 * @property HistorialExamene[] $historialExamenes
 * @property HistorialMedico[] $historialMedicos
 * @property Seguimiento[] $seguimientos
 * @property Vacuna[] $vacunas
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Mascota extends Model
{
    public $timestamps = false;
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['nombre_mascota', 'Especie', 'Raza', 'Tipo_Pelaje', 'Color_Pelaje', 'Fecha_Nacimiento', 'Fecha_Adopcion', 'Peso', 'Tipificacion_Sangre', 'Numero_Chip', 'Castracion', 'Fecha_Castracion', 'id_dueño', 'veterinario_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function veterinario()
    {
        return $this->belongsTo(\App\Models\Veterinario::class, 'veterinario_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(\App\Models\User::class, 'id_dueño', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function archivosAdjuntos()
    {
        return $this->hasMany(\App\Models\ArchivosAdjunto::class, 'id', 'mascota_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function citas()
    {
        return $this->hasMany(\App\Models\Cita::class, 'id', 'mascota_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function historialExamenes()
    {
        return $this->hasMany(\App\Models\HistorialExamene::class, 'id', 'mascota_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function historialMedicos()
    {
        return $this->hasMany(\App\Models\HistorialMedico::class, 'id', 'mascota_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function seguimientos()
    {
        return $this->hasMany(\App\Models\Seguimiento::class, 'id', 'mascota_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function vacunas()
    {
        return $this->hasMany(\App\Models\Vacuna::class, 'id', 'mascota_id');
    }
    
}
