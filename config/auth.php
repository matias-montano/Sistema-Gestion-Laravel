<?php

return [

    'defaults' => [
        'guard' => 'web',
        'passwords' => 'employees',
    ],

    'guards' => [
        'web' => [
            'driver' => 'session',
            'provider' => 'employees',
        ],

        'employee' => [
            'driver' => 'session',
            'provider' => 'employees',
        ],
    ],

    'providers' => [
        'employees' => [
            'driver' => 'eloquent',
            'model' => App\Models\Employee::class,
        ],
    ],

    'passwords' => [
        'employees' => [
            'provider' => 'employees',
            'table' => 'password_resets',
            'expire' => 60,
            'throttle' => 60,
        ],
    ],

    'password_timeout' => 10800,

];