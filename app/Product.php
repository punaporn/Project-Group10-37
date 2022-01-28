<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $primaryKey = 'id';

    protected $fillable = [
        'name',
        'image',
        'description',
        'price',
        'category_id',
    ];
}
