<?php

namespace App\Http\Requests\Admin\About;

use App\Http\Requests\Admin\BaseRequest;
use App\Models\About;
use Illuminate\Validation\Rule;


class EditAboutRequest extends BaseRequest
{

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
   public function rules()
    {
        return [
            'body'                          => 'required',
            'title'                         => 'required',
            //'photo'                         => 'required',
        ];
    }

    public function persist($id)
    {
        if ($this->photo) {
            $image = uploadImage($this->photo);
            $this->offsetunset('photo');
			$this->offsetSet('image', $image);
        }

        About::find($id)->Update($this->request->all());
    }


}