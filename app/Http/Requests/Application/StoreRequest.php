<?php

namespace App\Http\Requests\Application;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'name' => 'required|string',
            'phone' => 'required|string',
            'email' => 'required|string',
            'comment' => 'nullable|string',
            'source' => 'nullable|string',
            'file' => 'nullable',
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'Необходимо ввести имя',
            'name.string' => 'Данные должны соответствовать строчному типу',
            'phone.required' => 'Необходимо заполнить телефон',
            'email.required' => 'Необходимо заполнить Email',
        ];
    }
}
