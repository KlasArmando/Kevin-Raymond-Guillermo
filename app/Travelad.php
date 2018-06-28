<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Travelad extends Model
{
    protected $table = "travelads";

    protected $fillable = [
        'name', 'title', 'description',
    ];

    public function user()
    {
        return $this-> belongsTo('App/userh');
    }
}
