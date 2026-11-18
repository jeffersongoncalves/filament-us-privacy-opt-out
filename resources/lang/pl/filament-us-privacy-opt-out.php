<?php

return [
    'resource' => [
        'label' => 'Wybór dotyczący prywatności',
        'plural_label' => 'Wybory dotyczące prywatności',
    ],

    'fields' => [
        'subject' => 'Konsument',
        'right' => 'Prawo',
        'action' => 'Wybór',
        'state' => 'Stan',
        'created_at' => 'Zarejestrowano',
        'source' => 'Źródło',
        'ip_address' => 'Adres IP',
        'user_agent' => 'User agent',
        'metadata' => 'Metadane',
    ],

    'right' => [
        'sale' => 'Sprzedaż danych osobowych',
        'targeted_advertising' => 'Reklama ukierunkowana',
        'profiling' => 'Profilowanie',
        'sensitive_data' => 'Dane wrażliwe',
    ],

    'action' => [
        'opted_out' => 'Wyrażono sprzeciw',
        'opted_in' => 'Zgoda lub przystąpienie',
    ],

    'sources' => [
        'gpc' => 'Sygnał Global Privacy Control',
        'form' => 'Formularz',
        'claimed' => 'Przypisano po zalogowaniu',
    ],

    'filters' => [
        'visitors' => 'Odwiedzający bez konta',
        'gpc' => 'Z sygnału Global Privacy Control',
    ],

    'visitor' => 'Odwiedzający',
];
