<?php

return [
    'resource' => [
        'label' => 'Choix de confidentialité',
        'plural_label' => 'Choix de confidentialité',
    ],

    'fields' => [
        'subject' => 'Consommateur',
        'right' => 'Droit',
        'action' => 'Choix',
        'state' => 'État',
        'created_at' => 'Enregistré le',
        'source' => 'Source',
        'ip_address' => 'Adresse IP',
        'user_agent' => 'User agent',
        'metadata' => 'Métadonnées',
    ],

    'right' => [
        'sale' => 'Vente de données personnelles',
        'targeted_advertising' => 'Publicité ciblée',
        'profiling' => 'Profilage',
        'sensitive_data' => 'Données sensibles',
    ],

    'action' => [
        'opted_out' => 'S\'est opposé',
        'opted_in' => 'Accepté ou consenti',
    ],

    'sources' => [
        'gpc' => 'Signal Global Privacy Control',
        'form' => 'Formulaire',
        'claimed' => 'Rattaché après la connexion',
    ],

    'filters' => [
        'visitors' => 'Visiteurs sans compte',
        'gpc' => 'Issu d\'un signal Global Privacy Control',
    ],

    'visitor' => 'Visiteur',
];
