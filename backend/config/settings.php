<?php

return [
    'settings' => [
        'displayErrorDetails' => true,
        'determineRouteBeforeAppMiddleware' => true,
        'atlas' => [
            'pdo' => [
                'mysql:dbname=DBNAME;host=localhost',
                'USER',
                'PASSWORD',
            ],
            'namespace' => 'DataSource',
            'directory' => dirname(__DIR__) . '/src/classes/DataSource',
        ]
    ]
];