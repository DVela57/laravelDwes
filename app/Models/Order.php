<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    public function client() {
        //return $this->belongsTo(Client::class); 1N
        return $this->BelongsToMany(Client::class); //nM
    }
}
