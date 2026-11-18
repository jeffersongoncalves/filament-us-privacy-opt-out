<?php

return [
    'resource' => [
        'label' => 'Maxfiylik tanlovi',
        'plural_label' => 'Maxfiylik tanlovlari',
    ],

    'fields' => [
        'subject' => 'Isteʼmolchi',
        'right' => 'Huquq',
        'action' => 'Tanlov',
        'state' => 'Shtat',
        'created_at' => 'Qayd etilgan',
        'source' => 'Manba',
        'ip_address' => 'IP manzil',
        'user_agent' => 'Foydalanuvchi agenti',
        'metadata' => 'Metama\'lumotlar',
    ],

    'right' => [
        'sale' => 'Shaxsiy ma\'lumotlarni sotish',
        'targeted_advertising' => 'Maqsadli reklama',
        'profiling' => 'Profillash',
        'sensitive_data' => 'Nozik ma\'lumotlar',
    ],

    'action' => [
        'opted_out' => 'Rad etdi',
        'opted_in' => 'Rozi bo\'ldi',
    ],

    'sources' => [
        'gpc' => 'Global Privacy Control signali',
        'form' => 'Shakl',
        'claimed' => 'Kirgandan soʻng biriktirildi',
    ],

    'filters' => [
        'visitors' => 'Hisobsiz tashrif buyuruvchilar',
        'gpc' => 'Global Privacy Control signalidan',
    ],

    'visitor' => 'Tashrif buyuruvchi',
];
