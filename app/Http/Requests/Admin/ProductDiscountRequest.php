<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class ProductDiscountRequest extends FormRequest
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
            'pakages_id' => 'required|integer', 
            'title' => 'required|max:255',
            'amount' => 'required',
            'start_at' => 'required',
            'end_at' => 'required',
            'status' => 'max:255'
        ];
    }
}
