<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Database\Factories\RolFactory;
class Estado extends Model
{
use HasFactory;

    protected $table = 'estados';

    protected $primaryKey = 'id_estado';

    protected $fillable = [
        'desc_estado',

    ];
    public $timestamps = true; // Si no usas created_at/updated_at
    protected $dates = [
        'created_at',
        'updated_at'
    ];
    public $incrementing = true;
}
