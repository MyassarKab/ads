<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;


class StoreProduct extends FormRequest
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

      $today = Carbon\Carbon::today();
        return [
        // 'name_en' => 'string|max:190',
        // 'name_ar' => 'string|max:190',
        // 'name_tr' => 'string|max:190',
        'title' => 'string|max:190',
        // 'user_id' => 'required|numeric|min:1',
        'category_id' => 'required|numeric|min:1',
        'brand_id' => 'numeric|min:1',
        'model_id' => 'numeric|min:1',
        'country_id' => 'required|numeric|min:1',
        'price' => 'required|numeric|min:1',
        'adress' => 'string|unique:categories|max:190',
        'status' => 'required|string',
        // 'discount' => 'numeric|min:1',
        // 'status_en' => 'string|in:new, used',
        // 'status_ar' => 'string|in:مستعمل , جديد',
        // 'status_tr' => 'string|in:yeni, kullanılmış',
        // 'shipping' => 'numeric|max:1',
        'negotiable' => 'required|string|max:3',
        // 'Technical_condition_en' => 'string|in:good,very good,excellent',
        // 'Technical_condition_ar' => 'string|in:جيد,جيد جدا,ممتاز',
        // 'Technical_condition_tr' => 'string|in:iyi,çok iyi,mükemmel',
        'urgently_kind'  => 'required|numeric|max:3',
        'description' => 'required|string',
        'expiry_date'=>'required|date|after_or_equal:.'$today,
        // 'description_ar' => 'string',
        // 'description_en' => 'string',
        // 'description_tr' => 'string',
        'image' => 'required|image|mimes:jpg,jpeg,bmp,png,svg,gif|max:2048',
        'upload_file *' => 'required|image|mimes:jpg,jpeg,bmp,png,svg,gif|max:2048',
      ];

    }

//     protected function failedValidation(Validator $validator) {
//         throw new HttpResponseException(response()->json($validator->errors()->all(), 422,[
//     'name' => 'Abigail',
//     'state' => 'CA'
// ] ));
// }


}
