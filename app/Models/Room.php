<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Room extends Model
{
    protected $primaryKey = 'tipo';
    protected $autoIncrement = false;
    protected $keyType = "string";
    protected $fillable = [
        'prezzo_€',
        'posti_letto',
        'numero_camere',
        'n_disponibili'
    ];

public function booked_rooms () {
        return $this-> hasMany('App/Models/BookedRoom');
    }
}