<?php

namespace App\Http\Requests\Admin\Setting;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use App\Models\About;
class EditRequest extends FormRequest
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
            'title'                     => 'required',
            'address'                   => 'required',
            'phone'                     => 'required',
            'email'                     => 'required|email',
        ];
    }

    public function persist($id)
    {
        if ($this->file) {
            $image = uploadImage($this->file);
            $this->offsetunset('file');
			$this->offsetSet('image', $image);
        }
        About::find($id)->Update($this->request->all());
    }
}
