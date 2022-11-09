<?php

namespace App\Http\Requests;

use App\Models\Orderdetail;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyOrderdetailRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('orderdetail_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:orderdetails,id',
        ];
    }
}
