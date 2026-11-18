<?php

return [
    'resource' => [
        'label' => 'Scelta sulla privacy',
        'plural_label' => 'Scelte sulla privacy',
    ],

    'fields' => [
        'subject' => 'Consumatore',
        'right' => 'Diritto',
        'action' => 'Scelta',
        'state' => 'Stato',
        'created_at' => 'Registrato il',
        'source' => 'Origine',
        'ip_address' => 'Indirizzo IP',
        'user_agent' => 'User agent',
        'metadata' => 'Metadati',
    ],

    'right' => [
        'sale' => 'Vendita di dati personali',
        'targeted_advertising' => 'Pubblicità mirata',
        'profiling' => 'Profilazione',
        'sensitive_data' => 'Dati sensibili',
    ],

    'action' => [
        'opted_out' => 'Opt-out esercitato',
        'opted_in' => 'Accettato o acconsentito',
    ],

    'sources' => [
        'gpc' => 'Segnale Global Privacy Control',
        'form' => 'Modulo',
        'claimed' => 'Associato dopo l\'accesso',
    ],

    'filters' => [
        'visitors' => 'Visitatori senza account',
        'gpc' => 'Da un segnale Global Privacy Control',
    ],

    'visitor' => 'Visitatore',
];
