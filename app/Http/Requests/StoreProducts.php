<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProducts extends FormRequest
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
        $today = \Carbon\Carbon::today();

        return [
          'title' => 'string|max:190',

          'category_id' => 'required|numeric|min:1',
          'brand_id' => 'numeric|min:1',
          'model_id' => 'numeric|min:1',
          'country_id' => 'required|numeric|min:1',
          'price' => 'required|numeric|min:1',
          'adress' => 'string',
          'status' => 'required|string',

          'negotiable' => 'required|string|max:3',

          'urgently_kind'  => 'required|numeric|max:3',
          'description' => 'required|string',
          'expiry_date'=>'required|date|after_or_equal:'.$today,

          'image' => 'required|image|mimes:jpg,jpeg,bmp,png,svg,gif|max:2048',
          'upload_file *' => 'required|image|mimes:jpg,jpeg,bmp,png,svg,gif|max:2048',
      ];

    }
}
