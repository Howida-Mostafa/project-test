<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCompanyRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'name'     => 'required',
            'email' => 'required|email|unique:companies',
            'logo'  => 'required|file|image|mimes:jpeg,png,jpg,gif,svg|max:1024|dimensions:min_width=100,min_height=100',
            'website'  => 'required',
        ];
    }
}
