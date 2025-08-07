<?php


namespace Core;

class Validator
{
    protected $errors = [];

    public function validate($data, $rules)
    {
        foreach ($rules as $field => $rule) {
            if ($rule === 'required' && empty($data[$field])) {
                $this->errors[$field] = ucfirst($field) . ' is required.';
            }
        }

        return empty($this->errors);
    }
        public static function email($value)
    {
        return filter_var($value, FILTER_VALIDATE_EMAIL);
    }

    public static function string($value, $min = 1, $max = INF)
    {
        $value = trim($value);
        return strlen($value) >= $min && strlen($value) <= $max;
    }
    public function errors()
    {
        return $this->errors;
    }
}