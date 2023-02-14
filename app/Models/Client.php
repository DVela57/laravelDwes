<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Client extends Model
{
    use HasFactory;

    public function orders() {
        //return $this->hasMany(Order::class); relacion 1N
        return $this->BelongsToMany(Order::class); //relacion nM
    }

    protected $fillable = ["DNI", "nombre", "apellidos", "telefono", "email"];
}
