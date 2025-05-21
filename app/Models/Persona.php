<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Database\Factories\RolFactory;
class Persona extends Model
{
use HasFactory;

    protected $table = 'personas';

    protected $primaryKey = 'id_detalle';

    protected $fillable = [
        'nombre',
        'ap',
        'am',
        'correo',
        'contraseña',
        'id_rol',
    ];
    public $timestamps = true; // Si no usas created_at/updated_at
    protected $dates = [
        'created_at',
        'updated_at'
    ];
    public $incrementing = true;
}
