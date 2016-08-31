<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Joke extends Model
{
    protected $fillable = ['body', 'user_id'];

    protected $hidden = ['created_at', 'updated_at'];

    public function user(){
        return $this->belongsTo('App\User');
    }
}
