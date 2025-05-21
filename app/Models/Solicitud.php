<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Database\Factories\RolFactory;
class Solicitud extends Model
{
use HasFactory;

    protected $table = 'solicitudes';

    protected $primaryKey = 'id_solicitud';

    protected $fillable = [
        'id_producto',
        'id_cliente',
        'fecha_soli',
        'is_solicitud',
        'desc_problema',
    ];
    public $timestamps = true; // Si no usas created_at/updated_at
    protected $dates = [
        'created_at',
        'updated_at'
    ];
    public $incrementing = true;
}
