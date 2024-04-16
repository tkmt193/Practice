<?php

namespace dynamic2;
class Validator
{
    public function checkItemNumber(string $value): bool
    {
        return preg_match('/^[A-Z]{3}-[0-9-]{4}$/', $value);
    }

    public function checkPrice($value): bool
    {
        return is_int($value) && intval($value) > 0;
    }

}