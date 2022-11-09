<?php

namespace App\Http\Requests;

use App\Models\Livreur;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateLivreurRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('livreur_edit');
    }

    public function rules()
    {
        return [
            'name' => [
                'string',
                'nullable',
            ],
            'phone' => [
                'string',
                'nullable',
            ],
        ];
    }
}
