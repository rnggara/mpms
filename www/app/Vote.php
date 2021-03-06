<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vote extends Model
{
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo('App\User', 'id_user');
    }

    public function thread()
    {
        return $this->belongsTo('App\Thread', 'id_thread');
    }
}
