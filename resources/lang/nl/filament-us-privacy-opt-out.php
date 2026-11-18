<?php

return [
    'resource' => [
        'label' => 'Privacykeuze',
        'plural_label' => 'Privacykeuzes',
    ],

    'fields' => [
        'subject' => 'Consument',
        'right' => 'Recht',
        'action' => 'Keuze',
        'state' => 'Staat',
        'created_at' => 'Vastgelegd op',
        'source' => 'Bron',
        'ip_address' => 'IP-adres',
        'user_agent' => 'User agent',
        'metadata' => 'Metadata',
    ],

    'right' => [
        'sale' => 'Verkoop van persoonsgegevens',
        'targeted_advertising' => 'Gerichte reclame',
        'profiling' => 'Profilering',
        'sensitive_data' => 'Gevoelige gegevens',
    ],

    'action' => [
        'opted_out' => 'Afgemeld',
        'opted_in' => 'Ingeschreven of toestemming gegeven',
    ],

    'sources' => [
        'gpc' => 'Global Privacy Control-signaal',
        'form' => 'Formulier',
        'claimed' => 'Gekoppeld na inloggen',
    ],

    'filters' => [
        'visitors' => 'Bezoekers zonder account',
        'gpc' => 'Via een Global Privacy Control-signaal',
    ],

    'visitor' => 'Bezoeker',
];
