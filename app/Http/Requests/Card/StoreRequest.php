<?php

namespace App\Http\Requests\Card;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
{
    /**
     * Determine if the card is authorized to make this request.
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
                'id'=>'required|integer',
                'hours'=>'required|integer',
                'card_uid'=>'required|string',
                'card_action'=>'required|integer',
                'device'=>'required|integer',
                'user_id'=>'required|integer',
                'treatment_number'=>'required|string',
                
        ];
    }

}

