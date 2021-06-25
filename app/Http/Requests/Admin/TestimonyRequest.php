<?php

namespace App\Http\Requests\admin;

use Illuminate\Foundation\Http\FormRequest;

class TestimonyRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
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
            'testimony' => 'max:255',
            'status' => 'string|in:SHOW,HIDDEN' 
        ];
    }
}
