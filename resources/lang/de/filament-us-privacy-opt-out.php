<?php

return [
    'resource' => [
        'label' => 'Datenschutzentscheidung',
        'plural_label' => 'Datenschutzentscheidungen',
    ],

    'fields' => [
        'subject' => 'Verbraucher',
        'right' => 'Recht',
        'action' => 'Entscheidung',
        'state' => 'Bundesstaat',
        'created_at' => 'Erfasst am',
        'source' => 'Quelle',
        'ip_address' => 'IP-Adresse',
        'user_agent' => 'User Agent',
        'metadata' => 'Metadaten',
    ],

    'right' => [
        'sale' => 'Verkauf personenbezogener Daten',
        'targeted_advertising' => 'Gezielte Werbung',
        'profiling' => 'Profiling',
        'sensitive_data' => 'Sensible Daten',
    ],

    'action' => [
        'opted_out' => 'Widersprochen',
        'opted_in' => 'Zugestimmt oder eingewilligt',
    ],

    'sources' => [
        'gpc' => 'Global-Privacy-Control-Signal',
        'form' => 'Formular',
        'claimed' => 'Nach der Anmeldung übernommen',
    ],

    'filters' => [
        'visitors' => 'Besucher ohne Konto',
        'gpc' => 'Aus einem Global-Privacy-Control-Signal',
    ],

    'visitor' => 'Besucher',
];
