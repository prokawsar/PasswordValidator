[![Latest Stable Version](https://poser.pugx.org/prokawsar/password-validator/v/stable)](https://packagist.org/packages/prokawsar/password-validator)
[![Build Status](https://travis-ci.org/prokawsar/PasswordValidator-Package.svg?branch=master)](https://travis-ci.org/prokawsar/PasswordValidator-Package)
[![StyleCI](https://github.styleci.io/repos/149725750/shield?branch=master)](https://github.styleci.io/repos/149725750)
[![Total Downloads](https://poser.pugx.org/prokawsar/password-validator/downloads)](https://packagist.org/packages/prokawsar/password-validator)
[![License](https://poser.pugx.org/prokawsar/password-validator/license)](https://packagist.org/packages/prokawsar/password-validator)


# PasswordValidator-Package

Currently on development

## Installation 
- [x] Run `composer require prokawsar\password-validator`

(Currentyly auto discovery is not working) (Feel free to make a PR :P )

- [x] copy `prokawsar\PasswordValidator\PasswordValidatorServiceProvider::class` to `config/app.php` in provider section.

- [x] Then run `php artisan vendor:publish` and select `Provider: prokawsar\PasswordValidator\PasswordValidatorServiceProvider` package 

all rules will be installed in App/Rules folder.


## To use this package

Use `use App\Rules\{RuleName};` in a file, then add rule in Validator as `new RuleName`


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

To set error message go to `App\Rules\{RuleName}` and modify return value in `message()` function.
