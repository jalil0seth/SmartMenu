<?php

namespace App\Http\Requests;

use App\Models\Collection;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreCollectionRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('collection_create');
    }

    public function rules()
    {
        return [
            'products.*' => [
                'integer',
            ],
            'products' => [
                'array',
            ],
            'name' => [
                'string',
                'nullable',
            ],
        ];
    }
}
