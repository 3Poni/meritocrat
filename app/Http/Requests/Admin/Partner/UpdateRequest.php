<?php

namespace App\Http\Requests\Admin\Partner;

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
            'header' => 'nullable|string',
            'content' => 'nullable|string',
            'btn' => 'nullable|string',
            'url' => 'nullable|string',
            'tag_ids' => 'nullable|array',
            'tag_ids.*' => 'nullable|integer|exists:tags,id',
            'img' => 'file|mimes:jpeg,png,jpg,gif,svg|max:4096',
            'slider_img' => 'nullable|file|mimes:jpeg,png,jpg,gif,svg|max:4096',
        ];
    }
    public function messages()
    {
        return [
            'title.required' => 'Необходимо ввести название партнера',
            'img.required' => 'Необходимо прикрепить изображение',
            'mimes' => 'Изображение должно быть формата: jpeg,png,jpg,gif,svg',
            'max' => 'Изображение должно весит не более 4МБ',
        ];
    }
}
