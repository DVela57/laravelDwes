<?php

namespace App\Models;


use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;

class Order extends Model
{
    use HasFactory;

    public function client() {
        //return $this->belongsTo(Client::class); 1N
        return $this->BelongsToMany(Client::class); //nM
    }

    //fechas cambiar un campo

    /*protected $cast = [
        'fecha' => 'datetime:d-m-Y',
    ];*/

    public function Fecha(): Attribute {
        return new Attribute(
            fn($value) => Carbon::parse($value)->format('d-m-Y'),
            fn($value) => Carbon::parse($value)->format('d/m/Y')
        );
    }

    //modificar campos de fecha general

    protected $dateFormat = 'd-m-Y H:i:s';
}
