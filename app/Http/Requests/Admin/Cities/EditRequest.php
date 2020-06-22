<?php

namespace App\Http\Requests\Admin\Cities;

use App\Http\Requests\Admin\BaseRequest;
use App\Models\Cities;
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
            'title'                         => 'required',
        ];
    }

    public function persist($id)
    {
        
        Cities::find($id)->Update($this->request->all());
    }


}