<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCategory extends FormRequest
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
        'name_en' => 'required|string|unique:categories|max:190',
        'name_ar' => 'required|string|unique:categories|max:190',
        'name_tr' => 'required|string|unique:categories|max:190',
      ];

    }
}
