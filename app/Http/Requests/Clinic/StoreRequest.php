<?php

namespace App\Http\Requests\Clinic;

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
                'name'=>'required|string',
                'addinfo'=>'required|string',
                'contacts'=>'required|string',
                'department'=>'required|string',
               'town_id'=>'required|integer',
                
        ];
    }
}
