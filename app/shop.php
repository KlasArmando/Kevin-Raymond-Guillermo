<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class shop extends Model
{
    protected $table = "shops";

    protected $fillable =[
        'name', 'description', 'link',
    ];
}
