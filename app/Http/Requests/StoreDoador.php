<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreDoador extends FormRequest
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
          'nome'=> ["required","min:10","max:30"],
          'email'=> ["required","email"],
          'senha'=> ["required","min:10","max:30"],
          'endereco'=> ["required","min:10","max:30"],
          'uf'=> ["required","min:2","max:2"],
          'cpf'=> ["required","min:10","max:30"]
        ];
    }
}
