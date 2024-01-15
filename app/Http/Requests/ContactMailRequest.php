<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactMailRequest extends FormRequest
{
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'required',
            'subject' => 'required',
            'content' => 'required|string',
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            'name.required' => '名前フィールドは必須です。',
            'name.string' => '名前フィールドは文字列である必要があります。',
            'name.max' => '名前フィールドは255文字以下である必要があります。',
            'subject.string' => '件名フィールドは文字列である必要があります。',
            'email.required' => '電子メールフィールドは必須です。',
            'email.email' => '電子メールフィールドは有効なメールアドレスである必要があります。',
            'phone.required' => '電話番号フィールドは必須です。',
            'phone.numeric' => '電話番号フィールドは数値である必要があります。',
            'subject.required' => '件名フィールドは必須です。',
            'content.required' => '内容フィールドは必須です。',
        ];
    }
}
