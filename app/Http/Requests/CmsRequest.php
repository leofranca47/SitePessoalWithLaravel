<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CmsRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        $id = $this->segment(2);

        return [
            'titulo' => 'required|max:255|unique:posts,titulo,' . $id . ',id',
            'photo' => 'nullable|image',
            'artigo' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'titulo.unique' => 'Esse titulo já existe',
        ];
    }
}
