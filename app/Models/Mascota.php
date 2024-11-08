<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Mascota
 *
 * @property $Mascota_ID
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
 * @property $nombre_mascota
 * @property $id_dueño
 * @property $historial_medico_id
 * @property $desparacitaciones_id
 * @property $veterinario_id
 *
 * @property HistorialMedico $historialMedico
 * @property HistorialDesparacitacione $historialDesparacitacione
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
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['Mascota_ID', 'Especie', 'Raza', 'Tipo_Pelaje', 'Color_Pelaje', 'Fecha_Nacimiento', 'Fecha_Adopcion', 'Peso', 'Tipificacion_Sangre', 'Numero_Chip', 'Castracion', 'Fecha_Castracion', 'nombre_mascota', 'id_dueño', 'historial_medico_id', 'desparacitaciones_id', 'veterinario_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function historialMedico()
    {
        return $this->belongsTo(\App\Models\HistorialMedico::class, 'historial_medico_id', 'Historial_Medico_ID');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function historialDesparacitacione()
    {
        return $this->belongsTo(\App\Models\HistorialDesparacitacione::class, 'desparacitaciones_id', 'Desparacitacion_ID');
    }
    
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
        return $this->belongsTo(\App\Models\User::class, 'id_dueño', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function archivosAdjuntos()
    {
        return $this->hasMany(\App\Models\ArchivosAdjunto::class, 'Mascota_ID', 'mascota_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function citas()
    {
        return $this->hasMany(\App\Models\Cita::class, 'Mascota_ID', 'mascota_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function historialExamenes()
    {
        return $this->hasMany(\App\Models\HistorialExamene::class, 'Mascota_ID', 'mascota_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function historialMedicos()
    {
        return $this->hasMany(\App\Models\HistorialMedico::class, 'Mascota_ID', 'mascota_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function seguimientos()
    {
        return $this->hasMany(\App\Models\Seguimiento::class, 'Mascota_ID', 'mascota_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function vacunas()
    {
        return $this->hasMany(\App\Models\Vacuna::class, 'Mascota_ID', 'mascota_id');
    }
    
}
