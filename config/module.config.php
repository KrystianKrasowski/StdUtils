<?php

return [
    'service_manager' => [
        'invokables' => [
            'StdUtils\PasswordManager' => 'StdUtils\PasswordManager\StdPasswordManager',
            'StdUtils\TokenGenerator' => 'StdUtils\Generator\TokenGenerator',
        ],
    ],
];