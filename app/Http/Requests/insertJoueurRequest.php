<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class insertJoueurRequest extends FormRequest
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
            'prenom'=> ['required', 'string', 'max:100'],
            'nom'=> ['required', 'string', 'max:100'],
            'nbTournois'=> ['required', 'numeric', 'min:0'],
            'totalCashPrize'=> ['required', 'string', 'max:100'],
            'idJeu'=> ['required', 'numeric', 'min:0']
        ];
    }
}
