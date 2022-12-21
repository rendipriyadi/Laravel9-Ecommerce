<?php

namespace App\Http\Requests\Backsite\Product;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateProductRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => [
                'required', 'string', 'max:255', Rule::unique('product')->ignore($this->product),
            ],
            'category_id' => [
                'required', 'string', 'max:255',
            ],
            'price' => [
                'required', 'string', 'max:255',
            ],
            'weight' => [
                'required', 'string', 'max:255',
            ],
            'quantity' => [
                'required', 'string', 'max:255',
            ],
            'photo' => [
                'nullable', 'mimes:jpeg,svg,png', 'max:10000',
            ],
        ];
    }
}
