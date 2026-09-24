<?php

return [
    'enabled' => env('WP_SCHEMA_CRAFT_ENABLED', true),
    'timeout' => env('WP_SCHEMA_CRAFT_TIMEOUT', 30),
    'log_channel' => env('WP_SCHEMA_CRAFT_LOG', 'stack'),
];
