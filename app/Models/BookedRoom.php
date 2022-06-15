<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class BookedRoom extends Model
{
   
    protected $fillable = [
        'nome_camera',
        'user_id',
        'n_camere_prenot',
        'check_in',
        'check_out',
        'n_persone',
        'prezzo_tot'
    ];

public function rooms () {
    return $this-> belongsTo('App/Models/Room');

}

public function users () {
    return $this->belongsToMany(User::class);
}

}