<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
            'fio'=>'required|string',
            'email'=>'required|string',
            'contacts'=>'required|string',
            'phone'=>'required|string',
            'clinic_id'=>'required|integer',
            'permission'=>'required|integer',
            
        ];
    }
}
