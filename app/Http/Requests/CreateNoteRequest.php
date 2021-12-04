<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateNoteRequest extends FormRequest
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
            //
//            "name" => "required | max:20 | min:6",
            "title" => "required",
            "content" => "required",
        ];
    }

    public function messages()
    {
        return [
//            'name.required' => 'Tên danh mục không được để trống',
//            'name.min' => 'Tên danh mục không được nhỏ hơn 6 ký tự',
            'title.required' => 'Tiêu đề không được để trống',
            'content.required' => 'Nội dung không được để trống',
        ];
    }
}
