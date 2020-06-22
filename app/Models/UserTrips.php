<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserTrips extends Model
{
    //

    protected $table = 'user_trip';
    
    protected $fillable = ['from_city ','to_city','user_id ','trip_id','num_of_seat'];

    public function trip()
    {
        return $this->belongsTo('App\Models\trips', 'id', 'trip_id');
    }

    public function user() //
    {
        return $this->belongsTo('App\Models\users','id','user_id');
    }

    public function from_city()
    {
        return $this->belongsTo('App\Models\Cities', 'id', 'from_city ');
    }

    public function to_city() //
    {
        return $this->belongsTo('App\Models\Cities','id','to_city');
    }
}
