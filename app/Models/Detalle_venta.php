<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Database\Factories\RolFactory;
class detalle_ventas extends Model
{
use HasFactory;

    protected $table = 'detalle_ventas';

    protected $primaryKey = 'id_detalle';

    protected $fillable = [
        'id_venta',
        'id_producto',
        'subtotal',
    ];
    public $timestamps = true; // Si no usas created_at/updated_at
    protected $dates = [
        'created_at',
        'updated_at'
    ];
    public $incrementing = true;
}

