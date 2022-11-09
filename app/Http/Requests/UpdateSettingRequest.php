<?php

namespace App\Http\Requests;

use App\Models\Setting;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateSettingRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('setting_edit');
    }

    public function rules()
    {
        return [
            'nom' => [
                'string',
                'nullable',
            ],
            'banners' => [
                'array',
            ],
            'free_shipping' => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'min_order' => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'start_time' => [
                'date_format:' . config('panel.time_format'),
                'nullable',
            ],
            'end_time' => [
                'date_format:' . config('panel.time_format'),
                'nullable',
            ],
            'phone' => [
                'string',
                'nullable',
            ],
        ];
    }
}
