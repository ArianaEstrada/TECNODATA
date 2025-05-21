<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Database\Factories\RolFactory;
class Soporte_tecnico extends Model
{
use HasFactory;

    protected $table = 'soporte_tecnico';

    protected $primaryKey = 'id_soporte';

    protected $fillable = [
        'id_empleado',
        'id_estado',
        'id_solicitud',
        'id_producto',
        'fecha_resolucion',
        'desc_problematica',
    ];
    public $timestamps = true; // Si no usas created_at/updated_at
    protected $dates = [
        'created_at',
        'updated_at'
    ];
    public $incrementing = true;
}
