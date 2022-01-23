<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ad extends Model
{
    protected $table = 'ads';
    protected $guarded = [];

    public function plan()
    {
        return $this->belongsTo('App\Models\Plan','plan_id','id');
    }

    public function user()
    {
        return $this->belongsTo('App\User','user_id','id');
    }

    public function client()
    {
        return $this->belongsToMany('App\User','user_ad');
    }

    /*many to many create record
    $user = User::find(2);
    $ads = [1, 2];
    $user->ads()->attach($ads);  || $user->ads()->sync($ads);*/

    /*many to many remove record
    $user = User::find(2);
    $ads = [1, 2];
    $user->ads()->detach($ads);  || $user->ads()->sync($ads);*/

    /*many to many select record
    $user = User::find(1);
    foreach ($user->ads as $ad) {
        echo $ad->pivot->created_at;
    }
    */
}
