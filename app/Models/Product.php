<?php

namespace App\Models;

use Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ["nombre", "description", "precio"];

    public function setNombreAttribute($value)
    {
        $this->attributes['nombre'] = ucfirst(strtolower($value));
    }
    public function getNombreAttribute($value)
    {
        return strtoupper($value); //devolver nombre en mayusculas
    }

    /*public function Nombre(): Attribute {
        return new Attribute(
            fn($value) => strtoupper($value),
            fn($value) => ucfirst($value)
        );
    }*/
} 

