<?php

namespace StdUtils\PasswordManager;

class StdPasswordManager implements PasswordManagerInterface
{
    public function hash($rawValue)
    {
        return password_hash($rawValue, PASSWORD_BCRYPT);
    }

    public function compare($rawValue, $hashedValue)
    {
        return password_verify($rawValue, $hashedValue);
    }
}