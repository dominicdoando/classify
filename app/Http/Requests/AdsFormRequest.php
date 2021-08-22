<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdsFormRequest extends FormRequest
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
            'feature_image'=>'required|mimes:png,jpg,jpeg,svg',
            'first_image'=>'required|mimes:png,jpg,jpeg,svg',
            'second_image'=>'required|mimes:png,jpg,jpeg,svg',
            'name'=>'required|min:3|max:60',
            'description'=>'required|min:3',
            'price'=>'required|regex"/^\d+(\.\d{1,2})?$/',
            'price_status'=>'require',
            'category_id'=>'require',
            'product_condition'=>'require',
            'country_id'=>'require',
            'phone_number'=>'numeric|size:10',
        ];
    }
}
