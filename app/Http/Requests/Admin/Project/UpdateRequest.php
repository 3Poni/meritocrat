<?php

namespace App\Http\Requests\Admin\Project;

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
            'service_id' => 'required|integer',
            'description' => 'nullable|string',
            'ext_description' => 'nullable|string',
            'header' => 'nullable|string',
            'client' => 'nullable|string',
            'img' => 'nullable|file|mimes:jpeg,png,jpg,gif,svg|max:4096',
        ];
    }
    public function messages()
    {
        return [
            'service_id.required' => 'Привяжите услугу к проекту',
            'mimes' => 'Изображение должно быть формата: jpeg,png,jpg,gif,svg',
            'max' => 'Изображение должно весит не более 4МБ',
        ];
    }
}
