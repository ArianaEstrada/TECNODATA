<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Database\Factories\RolFactory;
class Categoria extends Model
{
use HasFactory;

    protected $table = 'categorias';

    protected $primaryKey = 'id_categoria';

    protected $fillable = [
        'nom_cat',
    ];
    public $timestamps = true; // Si no usas created_at/updated_at
    protected $dates = [
        'created_at',
        'updated_at'
    ];
    public $incrementing = true;
}
