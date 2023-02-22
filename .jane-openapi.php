<?php

return [
    'openapi-file' => __DIR__ . '/resources/dpdhl-express-api-2.7.0-swagger.yaml',
    'namespace' => 'Korbeil\DHLExpress\Api',
    'directory' => __DIR__ . '/generated/',
    'strict' => false,
    'clean-generated' => true,
    'use-fixer' => true,
    'fixer-config-file' => __DIR__ . '/.php-cs-fixer.php',
];
