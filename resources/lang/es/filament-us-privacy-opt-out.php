<?php

return [
    'resource' => [
        'label' => 'Elección de privacidad',
        'plural_label' => 'Elecciones de privacidad',
    ],

    'fields' => [
        'subject' => 'Consumidor',
        'right' => 'Derecho',
        'action' => 'Elección',
        'state' => 'Estado',
        'created_at' => 'Registrado el',
        'source' => 'Origen',
        'ip_address' => 'Dirección IP',
        'user_agent' => 'Agente de usuario',
        'metadata' => 'Metadatos',
    ],

    'right' => [
        'sale' => 'Venta de datos personales',
        'targeted_advertising' => 'Publicidad dirigida',
        'profiling' => 'Elaboración de perfiles',
        'sensitive_data' => 'Datos sensibles',
    ],

    'action' => [
        'opted_out' => 'Se excluyó',
        'opted_in' => 'Aceptó o consintió',
    ],

    'sources' => [
        'gpc' => 'Señal Global Privacy Control',
        'form' => 'Formulario',
        'claimed' => 'Vinculado tras iniciar sesión',
    ],

    'filters' => [
        'visitors' => 'Visitantes sin cuenta',
        'gpc' => 'De una señal Global Privacy Control',
    ],

    'visitor' => 'Visitante',
];
