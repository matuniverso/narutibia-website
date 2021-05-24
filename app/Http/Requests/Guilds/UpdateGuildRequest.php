<?php

namespace App\Http\Requests\Guilds;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class UpdateGuildRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => [
                'min:5',
                'max:16',
                'string',
                Rule::unique('guilds')->ignore($this->guild->id)
            ],
            'motd' => [
                'max:80',
                'string'
            ]
        ];
    }
}
