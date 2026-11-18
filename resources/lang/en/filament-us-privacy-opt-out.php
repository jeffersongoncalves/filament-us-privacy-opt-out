<?php

return [
    'resource' => [
        'label' => 'Privacy choice',
        'plural_label' => 'Privacy choices',
    ],

    'fields' => [
        'subject' => 'Consumer',
        'right' => 'Right',
        'action' => 'Choice',
        'state' => 'State',
        'created_at' => 'Recorded at',
        'source' => 'Source',
        'ip_address' => 'IP address',
        'user_agent' => 'User agent',
        'metadata' => 'Metadata',
    ],

    'right' => [
        'sale' => 'Sale of personal data',
        'targeted_advertising' => 'Targeted advertising',
        'profiling' => 'Profiling',
        'sensitive_data' => 'Sensitive data',
    ],

    'action' => [
        'opted_out' => 'Opted out',
        'opted_in' => 'Opted in or consented',
    ],

    'sources' => [
        'gpc' => 'Global Privacy Control signal',
        'form' => 'Form',
        'claimed' => 'Claimed after login',
    ],

    'filters' => [
        'visitors' => 'Visitors without an account',
        'gpc' => 'From a Global Privacy Control signal',
    ],

    'visitor' => 'Visitor',
];
