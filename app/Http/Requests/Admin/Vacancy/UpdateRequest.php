<?php

namespace App\Http\Requests\Admin\Vacancy;

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
            'type' => 'required|string',
            'salary' => 'required|string',
            'requirements' => 'required|string',
            'description' => 'string|nullable'
        ];
    }
    public function messages()
    {
        return [
            'title.required' => 'Необходимо ввести название вакансии',
            'type.required' => 'Необходимо указать тип занятости',
            'salary.required' => 'Необходимо ввести зарплату',
            'requirements.required' => 'Необходимо указать требования',
        ];
    }
}
