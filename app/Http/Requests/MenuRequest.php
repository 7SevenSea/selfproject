<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MenuRequest extends FormRequest
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
            'price' => 'required|numeric',
            'image' => 'file|mimes:jpeg,png,jpg,pdf',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'メニュー名を入力して下さい。',
            'name.min' => 'メニュー名は2文字以上入力して下さい。',
            'name.max' => 'メニュー名は20文字以下で入力して下さい。',
            'price.required' => '価格で入力してください。',
            'numeric' => '数字で入力してください。',
            'image.file' => '指定されたファイルが画像ではありません。',
            'mines' => '指定された拡張子（JPEG/PNG/JPG/PDF）ではありません。',
        ];
    }
}
