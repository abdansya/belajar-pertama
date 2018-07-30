<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Preference extends Model
{
    public $timestamps = false;
    protected $fillable = ['user_id', 'country', 'currency', 'subscribe_miling_list'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
