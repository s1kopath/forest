<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class WithdrawRequest extends FormRequest
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
            'select_method' => 'required',
            'account_id' => 'required',
            'amount' => 'required|numeric',
            'otp' => 'required|numeric|digits:6',
        ];
    }

    public function messages()
    {
        return [
            'select_method.required' => 'Select a payment method',
            'account_id.required' => 'Select an account'
        ];
    }
}
