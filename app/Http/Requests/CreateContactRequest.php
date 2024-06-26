<?php

namespace App\Http\Requests;

use App\Rules\NumberPlusMinusParenSpaceRule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class CreateContactRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'firstName' => ['required', 'alpha'],
            'lastName' => ['required', 'alpha'],
            'email' => ['required', 'email', Rule::unique('contacts', 'email')],
            'phone' => ['required', new NumberPlusMinusParenSpaceRule()],
        ];
    }
}
