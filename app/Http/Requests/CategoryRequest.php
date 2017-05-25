<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
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
            'category_name' => 'required|unique:categories|min:2',
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return  array
     */
    public function messages()
    {
        return [
            'category_name.required' => 'Bạn không được bỏ trống trường này.',
            'category_name.unique'  => 'Tên thể loại đã tồn tại.',
            'category_name.min'  => 'Tên thể loại phải nhiều hơn 2 kí tự.',
        ];
    }
}
