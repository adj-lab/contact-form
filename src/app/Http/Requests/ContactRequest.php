<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'tel' => ['required', 'numeric', 'digits_between:10,11']
        ];
    }

    //エラーメッセージ
    public function messages()
    {
        return [
            'name.required' => '名前を入力してください[ms-code:01-001]',
            'name.string' => '名前を文字列で入力してください[ms-code:01-002]',
            'name.max' => '名前を255文字以下で入力してください[ms-code:01-003]',
            'email.required' => 'メールアドレスを入力してください[ms-code:02-004]',
            'email.string' => 'メールアドレスを文字列で入力してください[ms-code:02-005]',
            'email.email' => '有効なメールアドレス形式を入力してください[ms-code:02-006]',
            'email.max' => 'メールアドレスを255文字以下で入力してください[ms-code:02-007]',
            'tel.required' => '電話番号を入力してください[ms-code:03-001]',
            'tel.numeric' => '電話番号を数値で入力してください[ms-code:03-002]',
            'tel.digits_between' => '電話番号を10桁から11桁の間で入力してください[ms-code:03-003]'
        ];
    }
}
