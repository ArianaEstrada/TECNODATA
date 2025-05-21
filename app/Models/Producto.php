<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Database\Factories\RolFactory;
class producto extends Model
{
use HasFactory;

    protected $table = 'productos';

    protected $primaryKey = 'id_producto';

    protected $fillable = [
        'nombre_software',
        'desc_software',
        'id_categoria',
    ];
    public $timestamps = true; // Si no usas created_at/updated_at
    protected $dates = [
        'created_at',
        'updated_at'
    ];
    public $incrementing = true;
}
