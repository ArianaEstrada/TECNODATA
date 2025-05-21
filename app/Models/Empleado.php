<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Database\Factories\RolFactory;
class Empleado extends Model
{
use HasFactory;

    protected $table = 'empleados';

    protected $primaryKey = 'id_empleado';

    protected $fillable = [
        'id_persona',
    ];
    public $timestamps = true; // Si no usas created_at/updated_at
    protected $dates = [
        'created_at',
        'updated_at'
    ];
    public $incrementing = true;
}