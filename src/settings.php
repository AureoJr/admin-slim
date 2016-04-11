<?php
return [
    'settings' => [
        'displayErrorDetails' => true, // set to false in production

        // Renderer settings
        'renderer' => [
            'template_path' => __DIR__ . '/../templates/',
        ],

        // Monolog settings
        'logger' => [
            'name' => 'slim-admin',
            'path' => __DIR__ . '/../logs/app.log',
        ],

        // Database settings
       'database' =>[
            'db_username' => 'user',
            'db_password' => 'pass',
            'db_database' => 'nome_banco',
            'db_host'     => 'localhost',
            'db_driver'   => 'mysql'
       ]

    ],
];
