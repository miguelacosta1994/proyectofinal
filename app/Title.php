<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Title extends Model
{
    protected $table = "titles";

    protected $primaryKey = "id";

    protected $fillable = [
        'title', 'type', 'description', 'image'
    ];

    public $timestamps = false;
}
