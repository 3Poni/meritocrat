<?php

namespace App\Http\Requests\Admin\CustomPage;

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
            'description' => 'string',
            'keywords' => 'string',
            'header' => 'required|string',
            'url' => 'required|string',
            'content' => 'required|string',
        ];
    }
    public function messages()
    {
        return [
            'title.required' => 'Необходимо ввести название',
            'title.string' => 'Данные должны соответствовать строчному типу',
            'content.required' => 'Необходимо заполнить контент для страницы',
            'header.required' => 'Необходимо ввести заголовок',
            'url.required' => 'Необходимо ввести URL страницы',
        ];
    }
}
