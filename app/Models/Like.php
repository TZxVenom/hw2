<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Like extends Model
{
    /*protected $primaryKey = 'nome';
    protected $autoIncrement = false;
    protected $keyType = "string";*/
    protected $fillable = [
        'nome',
        'user_id',
        'src'
    ];


public function users()
{
    return $this->belongsToMany(User::class);
}


}