<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class escola extends FormRequest
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
        return  $validado = $request->validate([
            'nome' => ['required','max:255'],
            'tipo' => ['required'],
            'localizacao' => ['required'],
            'email' => ['required'],
            'senha' => ['required','max:15','min:5']
        ]);
    }
}
