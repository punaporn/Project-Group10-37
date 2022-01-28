<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{

    protected $table = 'categories';

    protected $guards = [];

    public function user(){

        return $this->belongsTo(User::class);

    }
}
