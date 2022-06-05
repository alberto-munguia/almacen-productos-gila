<?php

return [
    'settings' => [
        'displayErrorDetails' => true,
        'determineRouteBeforeAppMiddleware' => true,
        'atlas' => [
            'pdo' => [
                'mysql:dbname=gila;host=localhost',
                'jmunguia',
                'jMungu1A',
            ],
            'namespace' => 'DataSource',
            'directory' => dirname(__DIR__) . '/src/classes/DataSource',
        ]
    ]
];