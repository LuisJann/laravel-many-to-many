<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class StoreProjectRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'type_id' => ['nullable', 'exists:types,id'],
            'title' => ['required', 'max:150', 'unique:projects'],
            'content' => ['nullable'],
            'technologies' => ['exists:technologies,id']
        ];
    }
}
