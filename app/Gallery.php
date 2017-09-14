<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    protected $table = "galleries";

    protected $primaryKey = "id";

    protected $fillable = [
        'name', 'image', 'description'
    ];

    public $timestamps = false;
}
