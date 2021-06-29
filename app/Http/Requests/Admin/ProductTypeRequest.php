<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class ProductTypeRequest extends FormRequest
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
            'product_discounts_id' => 'required|integer', 
            'title' => 'required|max:255',
            'feature_1' => 'required|max:255', 
            'feature_2' => 'required|max:255', 
            'feature_3' => 'max:255',
            'feature_4' => 'max:255', 
            'initial_price' => 'integer'
        ];
    }
}
