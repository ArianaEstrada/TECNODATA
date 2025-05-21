<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;
        protected $fillable = [
        'name',
        'email',
        'password',
        'id_persona',
    ];

    protected $hidden = ['password', 'remember_token'];
    protected $dates = [
        'created_at',
        'updated_at'
    ];

   
    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
        public $timestamps = true; // Si no usas created_at/updated_at
    public $incrementing = true;
}
