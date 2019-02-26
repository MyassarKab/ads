<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;


class UpdateProduct extends FormRequest
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
        $id = $this->route('product')->id;
        return [
          'name_en' => 'string|max:190',
          'name_ar' => 'string|max:190',
          'name_tr' => 'string|max:190',
          'user_id' => 'required|numeric|min:1',
          'category_id' => 'required|numeric|min:1',
          'brand_id' => 'numeric|min:1',
          'model_id' => 'numeric|min:1',
          'country_id' => 'required|numeric|min:1',
          'price' => 'required|numeric|min:1',
          'adress' => 'string|unique:categories|max:190',
          'discount' => 'numeric|min:1',
          'status' => 'numeric|max:2',
          'shipping' => 'numeric|max:1',
          'negotiable' => 'numeric|max:2',
          'Technical_condition' => 'numeric|max:3',
          'urgently_kind'  => 'numeric|max:3',

          'description_ar' => 'string',
          'description_en' => 'string',
          'description_tr' => 'string',
          //'image' => 'required|image|mimes:jpg,jpeg,bmp,png,svg,gif|max:60000',
      ];

    }

//     protected function failedValidation(Validator $validator) {
//         throw new HttpResponseException(response()->json($validator->errors()->all(), 422 ));
// }


}
