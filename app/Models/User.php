<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
//use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use /*HasApiTokens,*/ HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'surname',
        'username',
        'password',
        'email'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'email'
    ];

    public function booked_rooms () {
        return $this->belongsToMany(Room::class, 'room_user', 'id', 'room_id');
    }

    public function likes()
    {
        return $this->belongsToMany(Like::class, 'like_user', 'id', 'like_id');
    }

}
