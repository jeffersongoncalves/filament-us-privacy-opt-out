<?php

return [
    'resource' => [
        'label' => 'Escolha de privacidade',
        'plural_label' => 'Escolhas de privacidade',
    ],

    'fields' => [
        'subject' => 'Consumidor',
        'right' => 'Direito',
        'action' => 'Escolha',
        'state' => 'Estado',
        'created_at' => 'Registado em',
        'source' => 'Origem',
        'ip_address' => 'Endereço IP',
        'user_agent' => 'User agent',
        'metadata' => 'Metadados',
    ],

    'right' => [
        'sale' => 'Venda de dados pessoais',
        'targeted_advertising' => 'Publicidade direcionada',
        'profiling' => 'Definição de perfis',
        'sensitive_data' => 'Dados sensíveis',
    ],

    'action' => [
        'opted_out' => 'Optou por sair',
        'opted_in' => 'Aceitou ou consentiu',
    ],

    'sources' => [
        'gpc' => 'Sinal Global Privacy Control',
        'form' => 'Formulário',
        'claimed' => 'Associado após o início de sessão',
    ],

    'filters' => [
        'visitors' => 'Visitantes sem conta',
        'gpc' => 'De um sinal Global Privacy Control',
    ],

    'visitor' => 'Visitante',
];
