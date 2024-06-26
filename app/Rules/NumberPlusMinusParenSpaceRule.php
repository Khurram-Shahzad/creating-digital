<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class NumberPlusMinusParenSpaceRule implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        if (!preg_match('/^[0-9\+\-\(\) ]+$/', $value)) {
            $fail( 'The :attribute must only contain numbers, spaces, and symbols +, -, (, and ).');
        }
    }
}
