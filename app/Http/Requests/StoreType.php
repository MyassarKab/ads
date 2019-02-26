<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreType extends FormRequest
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
        'category_id' => 'required|numeric',
        'brand_id' => 'required|numeric',
      ];

    }
}
