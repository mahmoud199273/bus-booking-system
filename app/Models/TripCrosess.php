<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TripCrosess extends Model
{
    //
    protected $table = 'trip_crosses';
    
    protected $fillable = ['trip_id ','city_id'];

    public function cities()
    {
        return $this->hasone('App\Models\Cities', 'id', 'city_id');
    }

    public function trips() //
    {
        return $this->hasone('App\Models\Trips','id','trip_id');
    }
}
