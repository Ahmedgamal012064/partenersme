<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Withdraw extends Model
{
    protected $table = 'withdraws';
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo('App\User','user_id','id');
    }
}
