[![Latest Stable Version](https://poser.pugx.org/prokawsar/password-validator/v/stable)](https://packagist.org/packages/prokawsar/password-validator)
[![Build Status](https://travis-ci.org/prokawsar/PasswordValidator-Package.svg?branch=master)](https://travis-ci.org/prokawsar/PasswordValidator-Package)
[![StyleCI](https://github.styleci.io/repos/149725750/shield?branch=master)](https://github.styleci.io/repos/149725750)
[![Total Downloads](https://poser.pugx.org/prokawsar/password-validator/downloads)](https://packagist.org/packages/prokawsar/password-validator)
[![License](https://poser.pugx.org/prokawsar/password-validator/license)](https://packagist.org/packages/prokawsar/password-validator)


# PasswordValidator-Package

Currently in development

## Installation 
- [x] Run `composer require prokawsar/password-validator`

- [x] Then run `php artisan vendor:publish` and select `Provider: prokawsar\PasswordValidator\PasswordValidatorServiceProvider` package 

all rules will be published in the App/Rules folder.


## To use this package

Use `use App\Rules\{RuleName};` and add a rule in Validator::make calls as `new RuleName`


E.G. 
```php
<?php
  use App\Rules\Uppercase;

  return Validator::make($data, [
      'email' => 'required|string|email|max:255|unique:users',
      // 'password' => 'required|string|min:6|confirmed',
      'password' => ['required', new Uppercase],

  ]);
```
## Customization

You can set your own `error` message

To change error message go to `App\Rules\{RuleName}` and modify the return value in the `message()` function.
