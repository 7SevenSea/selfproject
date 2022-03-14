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
            'name' => 'required|min:2|max:20',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'カテゴリー名を入力して下さい。',
            'name.min' => 'カテゴリー名は2文字以上入力して下さい。',
            'name.max' => 'カテゴリー名は20文字以下で入力して下さい。',
        ];
    }
}
