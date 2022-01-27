<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUpdatePost extends FormRequest
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
        return [
            'estado' => 'min:1|max:160',
            'cidade' => 'min:1|max:160',
            'instituicao' => 'nullable',
            'polo' => 'nullable',
            'telefone' => 'nullable',
            'telefone2' => 'nullable',
            'site' => 'nullable',
            'email' => 'nullable',
            'endereco' => 'nullable',
            'facebook' => 'nullable',
            'instagram' => 'nullable',
            'linkedin' => 'nullable',
            'twitter' => 'nullable',
            'imagem' => 'nullable|image',
            'sobre' => 'nullable',
            'cursos' => 'nullable',
            'pagante' => 'nullable',
        ];
    }
}
