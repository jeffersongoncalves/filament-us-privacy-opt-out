<?php

return [
    'resource' => [
        'label' => 'Gizlilik tercihi',
        'plural_label' => 'Gizlilik tercihleri',
    ],

    'fields' => [
        'subject' => 'Tüketici',
        'right' => 'Hak',
        'action' => 'Seçim',
        'state' => 'Eyalet',
        'created_at' => 'Kaydedilme',
        'source' => 'Kaynak',
        'ip_address' => 'IP adresi',
        'user_agent' => 'Kullanıcı aracısı',
        'metadata' => 'Meta veriler',
    ],

    'right' => [
        'sale' => 'Kişisel verilerin satışı',
        'targeted_advertising' => 'Hedefli reklamcılık',
        'profiling' => 'Profilleme',
        'sensitive_data' => 'Hassas veriler',
    ],

    'action' => [
        'opted_out' => 'Vazgeçti',
        'opted_in' => 'Katıldı veya rıza verdi',
    ],

    'sources' => [
        'gpc' => 'Global Privacy Control sinyali',
        'form' => 'Form',
        'claimed' => 'Girişten sonra hesaba bağlandı',
    ],

    'filters' => [
        'visitors' => 'Hesabı olmayan ziyaretçiler',
        'gpc' => 'Global Privacy Control sinyalinden',
    ],

    'visitor' => 'Ziyaretçi',
];
