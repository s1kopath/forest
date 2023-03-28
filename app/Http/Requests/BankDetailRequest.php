<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BankDetailRequest extends FormRequest
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
            'bank_name' => 'required',
            'branch_name' => 'required',
            'account_name' => 'required',
            'account_number' => 'required',
            'country' => 'required',
            'state' => 'required',
            'swift_code' => 'required',
            'routing_number' => 'required',
        ];
    }
}
