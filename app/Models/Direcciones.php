<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Direcciones extends Model
{
    use HasFactory;
    protected $table = 'direcciones';
    protected $fillable = ['contactos_id', 'calle', 'numero_exterior', 'numero_interior', 'colonia', 'codigo_postal', 'ciudad', 'estado', 'pais'];

    public function contacto()
    {
        return $this->belongsTo(Contactos::class, 'contactos_id');
    }
}
