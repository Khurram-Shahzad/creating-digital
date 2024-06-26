<?php

namespace App\Http\Requests;

use App\Rules\NumberPlusMinusParenSpaceRule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Route;
use Illuminate\Validation\Rule;

class UpdateContactRequest extends FormRequest
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
            'email' => ['required', 'email', Rule::unique('contacts')->ignore(Route::input('contact'))],
            'phone' => ['required', new NumberPlusMinusParenSpaceRule()],
        ];
    }
}
