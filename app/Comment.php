<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = "comments";

    protected $fillable =[
        'name', 'email', 'comment'
    ];
    public function post()
    {

    }
    public function comments()
    {
        return $this->hasOne('App\shop');
    }
}
