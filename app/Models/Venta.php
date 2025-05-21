<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Database\Factories\RolFactory;

class Venta extends Model
{
use HasFactory;

    protected $table = 'ventas';

    protected $primaryKey = 'id_venta';

    protected $fillable = [
        'id_empleado',
        'id_cliente',
        'fecha_v',
        'total',
       
    ];
    public $timestamps = true; // Si no usas created_at/updated_at
    protected $dates = [
        'created_at',
        'updated_at'
    ];
    public $incrementing = true;
}
