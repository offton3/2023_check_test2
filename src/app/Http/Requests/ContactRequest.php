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
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'gender' => ['required', 'numeric', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'tel' => ['required', 'numeric', 'max:255'],
            'address' =>['required', 'string', 'max:255'],
            'building' =>['string', 'max:255'],
            'category_id' =>['required', 'string','max:120'],
            'detail' =>['required', 'text','max:120'],

        ];
    }

    public function messages()
     {
         return [
             'first_name.required' => '姓を入力してください',
             'first_name.string' => '名前を文字列で入力してください',
             'first_name.max' => '名前を255文字以下で入力してください',
             'last_name.required' => '名を入力してください',
             'last_name.string' => '名前を文字列で入力してください',
             'last_name.max' => '名前を255文字以下で入力してください',

             'gender.required' => 'お問い合わせ種類を選択してください',

             'email.required' => 'メールアドレスを入力してください',
             'email.string' => 'メールアドレスを文字列で入力してください',
             'email.email' => '有効なメールアドレス形式を入力してください',
             'email.max' => 'メールアドレスを255文字以下で入力してください',
             'tel.required' => '電話番号を入力してください',
             'tel.numeric' => '電話番号を数値で入力してください',
             'tel.digits_between' => '電話番号を10桁から11桁の間で入力してください',
             'address.required' => '住所を入力してください',
             'category_id.required' => 'お問い合わせ種類を選択してください',
             'detail.required' => 'お問い合わせ種類を選択してください',
         ];
     }

}
