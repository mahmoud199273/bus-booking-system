<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Trips;
use App\Models\TripCrosess;
use App\Models\Cities;
use App\Http\Requests\Admin\Trips\EditRequest; // for validation process
use App\Http\Requests\Admin\Trips\StoreRequest; // for validation process
use Illuminate\Support\Facades\Validator;

class TripsController extends Controller
{
    function __construct(Trips $model){
        $this->middleware('admin');
        $this->model = $model;
        $this->view = 'trip';
        $view = 'trip';
        $route = 'trips';
        $cities = Cities::all();
        view()->share(compact('view','route','cities'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $list = $this->model->latest()->paginate(10);
        return view("admin.$this->view.index",compact('list'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view("admin.$this->view.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRequest $request)
    {
        //
        $data = $request->persist();

        if($request->crosses){
            foreach ($request->crosses  as $key => $value) {
                TripCrosess::insert([
                'trip_id'       => $data->id,
                'city_id' => $value
               ]);

            }
        }
        return redirect()->back()->with('status' , __('admin.created') );
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $row =  $this->model->findorfail($id);
        $crosessCities = $row->cross_cities->pluck('city_id')->toArray();
        $show = "disabled";
        return view("admin.$this->view.show",compact('row','show','crosessCities'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $row =  $this->model->findorfail($id);
        $crosessCities = $row->cross_cities->pluck('city_id')->toArray();
        return view("admin.$this->view.edit",compact('row','crosessCities'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(EditRequest $request, $id)
    {
        //
        $request->persist($id);
        TripCrosess::where("trip_id",$id)->delete();
        if($request->crosses){
            foreach ($request->crosses  as $key => $value) {
                TripCrosess::insert([
                'trip_id'       => $id,
                'city_id' => $value
               ]);

            }
        }
        return redirect()->back()->with('status' , __('admin.updated') );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        if (request()->ajax()) {
            $this->model->find($id)->delete();
            return response(['msg' => 'deleted', 'status' => 'success']);
        }
    }
}
