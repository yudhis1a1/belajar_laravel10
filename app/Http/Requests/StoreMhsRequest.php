<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreMhsRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'nim' => 'required|unique:mhs,nim|min:7|max:10',
            'nama' => 'required',
            'email' => 'required',
            'alamat' => 'required',
            'hp' => 'required',
        ];
    }
}
