<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contactos extends Model
{
    use HasFactory;
    protected $table = 'contactos';
    protected $fillable = ['nombre', 'apellido_paterno', 'apellido_materno'];

    public function direcciones()
    {
        return $this->hasMany(Direcciones::class);
    }

    public function emails()
    {
        return $this->hasMany(Emails::class);
    }

    public function telefonos()
    {
        return $this->hasMany(Telefonos::class);
    }
}
