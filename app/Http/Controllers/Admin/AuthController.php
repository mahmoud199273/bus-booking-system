<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class AuthController extends Controller
{

    public function loginIndex()
    {
        if(Auth::guard('admin')->user())
        {
            return redirect(config('app.admin_url').'/dashboard');
        }
        else
        {
            return view('admin.auth.login');
        }

    }


    public function login( Request $request )
    {

    	$validator = Validator::make($request->all() , [
            'email' => 'required|string',
            'password' => 'required|string',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withInput($request->input())->withErrors($validator);
        }

        $admin =  auth()->guard('admin')->attempt(['email' => $request->email, 'password' => $request->password ]);

        if( $admin ) {
            return redirect()->intended(config('app.admin_url').'/dashboard');

        }else{
            return Redirect::back()->withErrors([ 'msg'=> trans('auth.failed') ])->withInput();
        }
    }

    public function profile()
    {


        $admin = Auth::guard('admin')->user();
        return view('admin.auth.profile', compact('admin'));


    }

    public function updateProfile( Request $request )
    {


        $admin = Auth::guard('admin')->user();

            $validator = Validator::make( $request->all(), [
                'name'      => 'required|string|max:100|min:3',
                'email'     => ['required','email', Rule::unique('admins')->ignore($admin->id, 'id')],
                'password'  => 'nullable|string|min:6'

            ]);

            if ($validator->fails()) {
                return redirect()->back()->withInput($request->input())->withErrors($validator);
            }

            //Admin::find($admin->id)->update($request->all());
            if($request->password) Admin::find($admin->id)->update($request->all());
            else Admin::find($admin->id)->update($request->only('name','email'));




            return redirect()->back()->with('status' , __('admin.updated') );

    }




    public function logout( Request $request )
    {
        Auth::guard('admin')->logout();
        Session::flush();
        return redirect(config('app.admin_url'));
    }


}

