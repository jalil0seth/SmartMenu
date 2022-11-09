<?php

namespace App\Http\Requests;

use App\Models\Orderdetail;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateOrderdetailRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('orderdetail_edit');
    }

    public function rules()
    {
        return [
            'total' => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'quantity' => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'discount' => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
        ];
    }
}
