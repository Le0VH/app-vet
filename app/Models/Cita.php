<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Cita
 *
 * @property $id
 * @property $Fecha_Cita
 * @property $Hora_Cita
 * @property $Motivo_Cita
 * @property $Estado_Cita
 * @property $Tipo_De_Pago
 * @property $mascota_id
 * @property $historial_med_id
 * @property $id_user
 * @property $veterinario_id
 * @property $seguimiento_id
 *
 * @property Mascota $mascota
 * @property HistorialMedico $historialMedico
 * @property Veterinario $veterinario
 * @property Seguimiento $seguimiento
 * @property User $user
 * @property HistorialExamene[] $historialExamenes
 * @property HistorialMedico[] $historialMedicos
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Cita extends Model
{
    public $timestamps = false;
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['Fecha_Cita', 'Hora_Cita', 'Motivo_Cita', 'Estado_Cita', 'Tipo_De_Pago', 'mascota_id', 'historial_med_id', 'id_user', 'veterinario_id', 'seguimiento_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function mascota()
    {
        return $this->belongsTo(\App\Models\Mascota::class, 'mascota_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function historialMedico()
    {
        return $this->belongsTo(\App\Models\HistorialMedico::class, 'historial_med_id', 'id');
    }
    
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
    public function seguimiento()
    {
        return $this->belongsTo(\App\Models\Seguimiento::class, 'seguimiento_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(\App\Models\User::class, 'id_user', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function historialExamenes()
    {
        return $this->hasMany(\App\Models\HistorialExamene::class, 'id', 'citas_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function historialMedicos()
    {
        return $this->hasMany(\App\Models\HistorialMedico::class, 'id', 'citas_id');
    }
    
}
