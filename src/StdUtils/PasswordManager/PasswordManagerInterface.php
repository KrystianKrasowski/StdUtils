<?php

namespace StdUtils\PasswordManager;

interface PasswordManagerInterface
{
    public function hash($rawValue);

    public function compare($rawValue, $hashedValue);
}