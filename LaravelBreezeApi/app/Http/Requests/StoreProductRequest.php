<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Validator;

class StoreProductRequest extends FormRequest
{

    protected $stopOnFirstFailure = true;


    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'product_name' => 'required|max:255',
            'product_markup_name'=>'nullable',
            'product_vietnamese_name'=>'nullable',
            'price_origin' => 'required|numeric',
            'tax' => 'required|numeric'
        ];
    }

    public function messages(): array
    {
        return
        [
            'product_name.required' => 'Thiếu tên cho sản phẩm',
            'price_origin.required' => 'Thiếu giá tiền cho sản phẩm',
            'tax.required' => 'Thiếu mức thuế cho sản phẩm'
        ];
    }

    public function after(): array
    {
        return
        [

        ];
    }
}
