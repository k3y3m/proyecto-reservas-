<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reserve extends Model
{
    protected $fillable = [
        'destino', 'fechaReserva','fechaSalida','person_id'
    ];
}