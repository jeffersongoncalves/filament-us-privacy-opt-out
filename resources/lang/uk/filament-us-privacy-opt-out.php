<?php

return [
    'resource' => [
        'label' => 'Вибір конфіденційності',
        'plural_label' => 'Вибори конфіденційності',
    ],

    'fields' => [
        'subject' => 'Споживач',
        'right' => 'Право',
        'action' => 'Вибір',
        'state' => 'Штат',
        'created_at' => 'Записано',
        'source' => 'Джерело',
        'ip_address' => 'IP-адреса',
        'user_agent' => 'User agent',
        'metadata' => 'Метадані',
    ],

    'right' => [
        'sale' => 'Продаж персональних даних',
        'targeted_advertising' => 'Таргетована реклама',
        'profiling' => 'Профілювання',
        'sensitive_data' => 'Чутливі дані',
    ],

    'action' => [
        'opted_out' => 'Відмовився',
        'opted_in' => 'Погодився',
    ],

    'sources' => [
        'gpc' => 'Сигнал Global Privacy Control',
        'form' => 'Форма',
        'claimed' => 'Прив\'язано після входу',
    ],

    'filters' => [
        'visitors' => 'Відвідувачі без облікового запису',
        'gpc' => 'Із сигналу Global Privacy Control',
    ],

    'visitor' => 'Відвідувач',
];
