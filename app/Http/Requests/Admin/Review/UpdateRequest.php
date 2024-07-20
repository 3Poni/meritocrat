<?php

namespace App\Http\Requests\Admin\Review;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
            'fio' => 'required|string',
            'position' => 'required|string',
            'type' => 'integer|between:0,2',
            'url' => 'nullable|string',
            'message' => 'nullable|string',
            'img' => 'file|mimes:jpeg,png,jpg,gif,svg|max:4096',
        ];
    }
    public function messages()
    {
        return [
            'fio.required' => 'Укажите ФИО клиента',
            'position.required' => 'Укажите должность',
            'type.between' => 'Укажите тип должности из списка',
            'img.mimes' => 'Изображение должно быть формата: jpeg,png,jpg,gif,svg',
            'img.max' => 'Изображение должно весит не более 4МБ',
        ];
    }
}
