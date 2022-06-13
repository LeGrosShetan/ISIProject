<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class insertJeuRequest extends FormRequest
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
            'editeur'=> ['required', 'string', 'max:100'],
            'anneeSortie'=> ['required', 'numeric', 'min:0'],
            'cashPrizeTotal'=> ['required', 'string', 'max:100'],
            'nbTournois'=> ['required', 'numeric', 'min:0']
        ];
    }
}
