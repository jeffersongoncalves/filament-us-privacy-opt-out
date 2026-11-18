<?php

return [
    'resource' => [
        'label' => 'Выбор конфиденциальности',
        'plural_label' => 'Выборы конфиденциальности',
    ],

    'fields' => [
        'subject' => 'Потребитель',
        'right' => 'Право',
        'action' => 'Выбор',
        'state' => 'Штат',
        'created_at' => 'Записано',
        'source' => 'Источник',
        'ip_address' => 'IP-адрес',
        'user_agent' => 'User agent',
        'metadata' => 'Метаданные',
    ],

    'right' => [
        'sale' => 'Продажа персональных данных',
        'targeted_advertising' => 'Таргетированная реклама',
        'profiling' => 'Профилирование',
        'sensitive_data' => 'Чувствительные данные',
    ],

    'action' => [
        'opted_out' => 'Отказался',
        'opted_in' => 'Согласился',
    ],

    'sources' => [
        'gpc' => 'Сигнал Global Privacy Control',
        'form' => 'Форма',
        'claimed' => 'Привязано после входа',
    ],

    'filters' => [
        'visitors' => 'Посетители без учётной записи',
        'gpc' => 'Из сигнала Global Privacy Control',
    ],

    'visitor' => 'Посетитель',
];
