<?php

namespace App\Http\Requests\Admin\Trips;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use App\Models\Trips;

class StoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

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


    public function persist()
    {
       
        
        $data  = Trips::create($this->request->all());
        return $data;
    }
}
