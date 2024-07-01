<?php

namespace App\Http\Requests\Admin\Service;

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
            'title' => 'required|string',
            'description' => 'required|string',
            'header' => 'required|string',
            'url' => 'required|string',
            'img' => 'file|mimes:jpeg,png,jpg,gif,svg|max:4096',
        ];
    }
    public function messages()
    {
        return [
            'title.required' => 'Необходимо ввести название META',
            'description.required' => 'Необходимо ввести описание META',
            'header.required' => 'Необходимо ввести заголовок',
            'url.required' => 'Необходимо ввести URL',
            'img.required' => 'Необходимо прикрепить изображение',
            'mimes' => 'Изображение должно быть формата: jpeg,png,jpg,gif,svg',
            'max' => 'Изображение должно весит не более 4МБ',
        ];
    }
}
