<?php

namespace prokawsar\PasswordValidator\Rules;

use Illuminate\Contracts\Validation\Rule;

class Digit implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param string $attribute
     * @param mixed  $value
     *
     * @return bool
     */
    public function passes($attribute, $value)
    {   // Custom checking code
        for ($i = 0; $i < strlen($value); $i++) {
            if ($value[$i] >= '0' && $value[$i] <= '9') {
                return true;
            }
        }

        return false;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'Digit missing.';
    }
}
