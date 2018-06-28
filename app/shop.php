<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class shop extends Model
{
    protected $table = "shops";

    protected $fillable =[
        'name', 'description', 'link',

    ];
    public function user()
    {
        return $this->belongsTo('App\Users');

    }

    public function comments()
    {
        return $this->hasMany('App\Comment');
    }

}
