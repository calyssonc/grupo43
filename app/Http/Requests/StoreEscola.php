<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreEscola extends FormRequest
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
        return  [
            'nome' => 'required|max:255|string',
            'tipo' => 'required|string',
            'localizacao' => 'required|string',
            'email' => 'required|max:255|string',
            'senha' => 'required|max:15|min:5'
        ];
    }
}
