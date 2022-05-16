<?php

namespace App\Http\Requests;

use App\User;
use Illuminate\Foundation\Http\FormRequest;

class StoreUserRequest extends FormRequest
{
    public function authorize()
    {
        return \Gate::allows('user_create');
    }

    public function rules()
    {
        return [
            'name'     => [
                'required',
            ],
            'username' => [
                'required',
            ],
            'password' => [
                'required',
            ],
            'role_id'  => [
                'required',
                'integer',
            ]
        ];
    }
}
