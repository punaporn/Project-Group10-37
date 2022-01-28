<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    protected $primaryKey = 'id';

    protected $fillable = [
        'name',
        'detail',
    ];
}
