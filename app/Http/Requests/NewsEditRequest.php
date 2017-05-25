<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NewsEditRequest extends FormRequest
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
            'news_title' => 'required',
            'news_description' => 'required',
            'news_content' => 'required',
            'category' => 'required',
            'news_cate_id' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'news_title.required' => 'Tiêu đề không được để trống',
            'news_description.required' => 'Mô tả không được để trống',
            'news_content.required' => 'Nội dung không được để trống',
            'category.required' => 'Thể loại không được để trống',
            'news_cate_id.required' => 'Loại tin không được để trống',
        ];
    }
}
