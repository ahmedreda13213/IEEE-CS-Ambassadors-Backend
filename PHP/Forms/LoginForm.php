<?php
namespace Forms;

use Core\Validator;

class LoginForm
{
    protected $errors = [];

    public function validate($attributes)
    {
        if (! Validator::email($attributes['email'] ?? '')) {
            $this->errors['email'] = 'Please provide a valid email.';
        }

        if (! Validator::string($attributes['password'] ?? '', 7, 255)) {
            $this->errors['password'] = 'Password must be at least 7 characters.';
        }

        return empty($this->errors);
    }

    public function errors()
    {
        return $this->errors;
    }
}