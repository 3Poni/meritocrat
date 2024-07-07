<?php

namespace App\Http\Requests\Admin\Direction;

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
            'service_id' => 'required|integer|exists:services,id',
            'title' => 'required|string',
            'description' => 'required|string',
            'header' => 'required|string',
            'url' => 'nullable|string',
            'url_static' => 'nullable|string',
            'template' => 'nullable|int',
            'content' => 'string|nullable',
            'content2' => 'string|nullable',
            'result' => 'array|nullable',
            'result.*' => 'string|nullable',
            'stages' => 'array|nullable',
            'stages.*' => 'string|nullable',
            'result2' => 'array|nullable',
            'result2.*' => 'string|nullable',
        ];
    }
    public function messages()
    {
        return [
            'service_id.required' => 'Необходимо выбрать услугу для направления',
            'title.required' => 'Необходимо ввести название META',
            'description.required' => 'Необходимо ввести описание META',
            'header.required' => 'Необходимо ввести заголовок',
            'url.required' => 'Необходимо ввести URL',
            'content.required' => 'Необходимо заполнить контент страницы',
            'service.required' => 'Необходимо выбрать Услугу',
        ];
    }
}
