<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Trips extends Model
{
    //
    protected $table = 'trips';
    
    protected $fillable = ['from_city ','to_city','title','seats_num'];

    public function city_from()
    {
        return $this->belongsTo('App\Models\Cities', 'from_city', 'id');
    }

    public function city_to() //
    {
        return $this->belongsTo('App\Models\Cities','to_city','id');
    }
    public function cross_cities() //
    {
        return $this->hasMany('App\Models\TripCrosess','trip_id','id');
    }

    public function user_trips() //
    {
        return $this->hasMany('App\Models\UserTrips','trip_id','id');
    }

    public function getBookedSeats($from_city,$to_city){
        $row = $this->user_trips()->where('from_city', $from_city)->ORwhere('to_city', $to_city)->pluck('num_of_seat')->toArray();
        return isset($row) ? $row : null;
    }
    
}
