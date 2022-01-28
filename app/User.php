<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'username', 'phone', 'address',  'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    const ADMIN_TYPE = 1;
    const DEFAULT_TYPE = 0;
    public function isAdmin()
    {
        return $this->type === self::ADMIN_TYPE;
    }

    //content
    public function content(){

        return $this->hasMany(Content::class);

    }
    //content2

    public function content2(){

        return $this->hasMany(Content2::class);

    }
    //Product

    public function Product(){

        return $this->hasMany(Product::class);

    }
    //Categories

    public function Categories(){

        return $this->hasMany(Categories::class);

    }

}

