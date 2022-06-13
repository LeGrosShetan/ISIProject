<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class insertTournoiRequest extends FormRequest
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
            'nom'=> ['required', 'string', 'max:100'],
            'annee'=> ['required', 'numeric', 'min:0'],
            'cashprize'=> ['required', 'string', 'max:100'],
            'idJeu'=> ['required', 'numeric', 'min:0']
        ];
    }
}
