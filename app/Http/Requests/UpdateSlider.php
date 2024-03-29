<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateSlider extends FormRequest
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
        'name_en' => 'required|string|max:190',
        'name_ar' => 'required|string|max:190',
        'name_tr' => 'required|string|max:190',
        'image' => 'image|mimes:jpg,jpeg,bmp,png,svg,gif|max:2048',
      ];

    }
}
