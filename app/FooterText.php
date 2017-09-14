<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FooterText extends Model
{
    protected $table = "footer_text";

    protected $primaryKey = "id";

    protected $fillable = [
        'title', 'description'
    ];

    public $timestamps = false;
}
