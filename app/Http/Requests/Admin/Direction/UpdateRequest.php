<?php

namespace App\Http\Requests\Admin\Direction;

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
            'title' => 'required|string',
            'description' => 'required|string',
            'header' => 'required|string',
            'url' => 'required|string',
            'content' => 'text|required',
            'service' => 'int|required',
        ];
    }
    public function messages()
    {
        return [
            'title.required' => 'Необходимо ввести название META',
            'description.required' => 'Необходимо ввести описание META',
            'header.required' => 'Необходимо ввести заголовок',
            'url.required' => 'Необходимо ввести URL',
            'content.required' => 'Необходимо заполнить контент страницы',
            'service.required' => 'Необходимо выбрать Услугу',
        ];
    }
}
