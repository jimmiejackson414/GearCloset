<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\BelongsToMany;

class TripUser extends Model
{
    protected $fillable = ['trip_id', 'user_id'];
    protected $table = 'trip_user';

    public function trips()
    {
        return $this->belongsToMany('App\Models\Trip');
    }

    public function users()
    {
        return $this->belongsToMany('App\Models\User');
    }
}
