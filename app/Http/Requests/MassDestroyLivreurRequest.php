<?php

namespace App\Http\Requests;

use App\Models\Livreur;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyLivreurRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('livreur_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:livreurs,id',
        ];
    }
}
