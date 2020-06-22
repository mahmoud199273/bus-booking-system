<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Cities;
use App\Http\Requests\Admin\Cities\EditRequest; // for validation process
use App\Http\Requests\Admin\Cities\StoreRequest; // for validation process
use Illuminate\Support\Facades\Validator;

class CitiesController extends Controller
{
    function __construct(Cities $model){
        $this->middleware('admin');
        $this->model = $model;
        $this->view = 'city';
        $view = 'city';
        $route = 'cities';
        view()->share(compact('view','route'));
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
        $request->persist();
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
        $row =  $this->model->find($id);
        $show = "disabled";
        return view("admin.$this->view.show",compact('row','show'));
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
        $row =  $this->model->find($id);
        return view("admin.$this->view.edit",compact('row'));
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
