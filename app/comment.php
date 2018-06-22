<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class comment extends Model
{
    //
    protected $table = "travelads";

    protected $fillable = [
        'name', 'comment',
    ];
}
