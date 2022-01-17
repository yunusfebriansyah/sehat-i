<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $guarded = ['id'];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    public function getRouteKeyName()
    {
        return 'username';
    }

    public function ruang_bantu(){
        return $this->hasMany(RuangBantu::class);
    }

    public function comment(){
        return $this->hasMany(Comment::class);
    }

    public function need(){
        return $this->hasMany(Need::class);
    }

    public function saveItem(){
        return $this->hasMany(Save::class, 'id');
    }

}
