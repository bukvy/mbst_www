<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
                'clinic_id'=>'required|integer',
                'contacts'=>'required|string',
                'phone'=>'required|string',
                'password'=>'required|string',
                
        ];
    }

}

