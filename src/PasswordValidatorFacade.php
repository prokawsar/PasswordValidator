<?php

namespace prokawsar\PasswordValidator;

use Illuminate\Support\Facades\Facade;

class PasswordValidatorFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'password-validator';
    }
}
