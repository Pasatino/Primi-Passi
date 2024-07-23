<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AuthorStoreRequest extends FormRequest
{

    public function authorize(): bool
    {
        return true;
    }


    public function rules(): array
    {
        return [
            'name'=>'required|max:50|min:3',
            'surname'=>'required|max:50|min:3',
            'dateN'=>'required|max:10|min:8',
            'link'=>'sometimes|max:50',
        ];
    }
}
