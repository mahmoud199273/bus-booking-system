<?php

namespace App\Http\Requests\Admin\Trips;

use App\Http\Requests\Admin\BaseRequest;
use App\Models\Trips;
use Illuminate\Validation\Rule;


class EditRequest extends BaseRequest
{

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
   public function rules()
    {
        return [
            'title'                 => 'required',
            'from_city'             => 'required',
            'to_city'               => 'required',
            'seats_num'             => 'required|integer',
            "crosses"               => "required|array",
            "crosses.*"             => "required",
        ];
    }

    public function persist($id)
    {
        
        Trips::find($id)->Update($this->request->all());
    }


}