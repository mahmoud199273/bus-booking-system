<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Trips;
use App\Models\Cities;
use App\Models\UserTrips;
use Auth;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        
        $trips = Trips::with('cross_cities');
        if(request()->city_from)
        {
            $trips = $trips->whereHas('cross_cities', function($q){
                $q->where('city_id',request()->city_from)->ORwhere('trips.from_city',request()->city_from);
            });
        }
        if(request()->city_to)
        {
            $trips = $trips->whereHas('cross_cities', function($q){
                $q->where('city_id',request()->city_to)->ORwhere('trips.to_city',request()->city_to);
            });
        }
        $trips = $trips->get();
        $cities = Cities::all();
        
        return view('home',compact('trips','cities'));
    }


    public function book($id)
    {
        if(request()->city_from && request()->city_to && $id){
            $city_from = Cities::find(request()->city_from);
            $city_to = Cities::find(request()->city_to);

            $trip = Trips::find($id);

            $booked_seats = UserTrips::where("trip_id",$id)->where(function ($query) {
                    $query->where('from_city',request()->city_from)->ORwhere('to_city',request()->city_to);
                    })->get()->pluck('num_of_seat')->toArray();

            return view('book',compact('trip','city_to','city_from','booked_seats'));
        }
        return redirect(url('/home'));
        
    }


    public function Store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'trip_id' => ['required'],
            'from_city' => ['required'],
            'to_city' => ['required'],
            'num_of_seat' => ['required'],
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withInput($request->input())->withErrors($validator);
        }

        $user_trips = new UserTrips;
        $user_trips->trip_id = $request->trip_id;
        $user_trips->from_city = $request->from_city;
        $user_trips->to_city = $request->to_city;
        $user_trips->num_of_seat = $request->num_of_seat;
        $user_trips->user_id =  Auth::id();
        $user_trips->save();
        
        return redirect()->to(url('/'))->with('success', 'Successfully Book a Seat !!!');

    }
}
