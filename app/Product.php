<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = "products";

    protected $primaryKey = "id";

    protected $fillable = [
        'name', 'image', 'description'
    ];

    public $timestamps = false;
}
